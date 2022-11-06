<?php 
class App{
    protected $controller = 'home', $method = 'index', $params = [];

    public function __construct(){
        $url = $this->parseUrl();
        //Controller
        if(file_exists('../app/controlers/'. $url[0].'.php')){
            $this->controller = $url[0];
            unset($url[0]);
            // var_dump($url);
        }
        require_once '../app/controlers/'.$this->controller.'.php';
        $this->controller = new $this->controller;

        //Method
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //Parameters
        if(!empty($url)){
            $this->params = array_values($url);
        }

        //jalankan controler dan method dan kirim jalankan params jika ada
        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    public function parseUrl(){
        if(isset($_GET['url'])){
            $url= rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }
}