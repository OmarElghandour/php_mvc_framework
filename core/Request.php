<?php 

namespace app\core;

class Request 
{

    
    public function getPath()
    {
       return $_SERVER['REQUEST_URI'] ?? '/';

    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getBody()
    {
        $body = [];

        if($this->getMethod() === 'get'){
            foreach($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        if($this->getMethod() === 'post'){
            foreach($_POST as $key => $value) {
                $body[$key] = filter_input(\INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        return $body;
    }
}
