<?php


    
class Lista{
    function criarTarefas(string $novaTarefa, int $cod_usuario){
        $q = ("INSERT INTO tarefas(cod, tarefa, cod_usuario) VALUES (NULL, '$novaTarefa', $cod_usuario)");
        Banco::query($q);
    }

    function pegarTarefas(){
        $q = ("SELECT * FROM tarefas");
        Banco::query($q);

    }

    function pegarTarefasDeUsuario(){
        $q = ("SELECT * FROM tarefas WHERE cod_usuario='$cod_usuario'");
        Banco::query($q);
    }
}

?>