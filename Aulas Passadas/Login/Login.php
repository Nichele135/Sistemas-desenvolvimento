<form action="" method="post">

    <label for="usu">Usuario:</label>
    <input name="usu" type="text" id="usu">

    <label for="senha">Senha:</label>
    <input name="senha" type="password" id="senha">

    <button type="submit">Entrar</button>


</form>



<?php
$usuarios = [
    ["usu" => "pedroca", "nome" => "Pedro", "senha" => "123"],
    ["usu" => "zezinho", "nome" => "arthur", "senha" => "senha47"],
    ["usu" => "joaozinho", "nome" => "joao", "senha" => "ABC1"]
];

function entrar($usuarios){
    $usu = $_POST['usu'];
    $senha = $_POST['senha'];

    foreach ($usuarios as $usuario) {

        if($usu == $usuario['usu']){
            if($senha == $usuario['senha']){
                echo "Bem vindo!!!";
                return;
            }
            }
        }
        echo "Usuario nao encontrado";
    }

    entrar($usuarios);


?>