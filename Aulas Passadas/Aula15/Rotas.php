<?php

    class Rotas {

        public $controller = "HomeController";
        public $funcao = "index";
        public $parametros = array();
        function __construct(){

            $url = $this->getUrl();

            if(is_null($url)){
                
            }else{
                $nomeClasse = ucfirst($url[0]). "Controller";
                $filePath = "./Controller/$nomeClasse.php";

                if(file_exists($filePath)){
                    echo "Existe";
                    $this->controller = $nomeClasse;
                    array_shift($url);
                }

                //procurar funcao

                if(isset($url[0]) && !empty($url[0])){
                    $this->funcao = $url[0];
                    array_shift($url);
                }

                //procurar parametros

                if(count($url) > 0){
                    $this-> parametros = $url;
                }
            }

            require_once "./Controller/$this->controller.php";
            $this->controller = new $this->controller;

            call_user_func_array([$this->controller, $this->funcao], $this->parametros);
            //exemplo de this
            //$this->numero = 3;  
        }

        function getUrl(){

            $url = $_GET['url'] ?? null;

            if(is_null($url)){
                return null;
            }else{
                $url_nome = explode("/", $url);
                // echo var_dump($url_nome);
                return $url_nome;
            }
        }
    }

?>