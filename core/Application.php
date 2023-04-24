<?php

namespace app\core;


class Application {
    public static string $ROOT_DIR;
    public static Application $app;
    public Router $router;
    public Request $request;
    public Response $response;
    public Database $db;

    public function __construct($rootpath, $config)
    {         
      self::$ROOT_DIR = $rootpath;
      self::$app = $this;
      $this->request = new Request();
      $this->response = new Response();
      $this->router = new Router($this->request, $this->response); 
      $this->db = new Database($config);
    }

    public function run(){
      $this->router->resolve();
    }
}


?>