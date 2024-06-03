<?php
    class HomeController{
        function __construct(){
            
        }

        function index(){
            echo "teste index";
            $this->carregarView("testeFeliz.php", []);
        }

        function carregarView($nomeView, $dadosView){
            $arquivo = "../$nomeView.php";

            if(file_exists($arquivo)){
                require_once $arquivo;
            }else{
                die("Erro no arquivo -> $arquivo");
            }
        }
    }

?>