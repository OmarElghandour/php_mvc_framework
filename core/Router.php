<?php 

namespace app\core;

class Router {
    

    protected array $routes = [];
    protected Request $request;
    protected Response $response;
    public function __construct(Request $request,Response $response){
        $this->request = $request;
        $this->response = $response;
    }

    public function get(string $path, $callback)
    {
       $this->routes['get'][$path] = $callback;
    }

    public function post(string $path, $callback)
    {
       $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {

       $path = $this->request->getPath();
       $method = $this->request->getMethod();
       $callback = $this->routes[$method][$path] ?? false;

       if($callback === false) {
         $this->response->setStatusCode(404);
         return "404 not found";
       }

      if(is_string($callback)){         
         return $this->renderView($callback);
      }

      return call_user_func_array([new $callback[0](), $callback[1]], [$this->request]);

    }

    public function renderView($view)
    {
      include_once Application::$ROOT_DIR."/views/$view.php";
    }

    
}