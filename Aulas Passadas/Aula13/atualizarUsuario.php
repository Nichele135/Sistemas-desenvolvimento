<h1>atualizar Usuario:</h1>

<label for="">Usuario:</label>
<input name="usuario" type="text" id="">
<br>
<br>
<br>

<label for="">Nome:</label>
<input name="novoNome" type="text" id="">
<br>
<br>
<br>

<label for="">Nova Senha:</label>
<input name="novaSenha" type="password" id="">
<br>
<br>
<br>

<button type="submit">atualizar</button>

<?php

$banco = new mysqli("localhost:3307", "root", "", "db_aulasegunda");

$usu = $_POST['usuario'] ?? null;
$nome = $_POST['novoNome'] ?? "";
$sen = $_POST['novaSenha'] ?? "";

if(is_null($usu) || $sen != ""){
    require_once "banco2.php";
}else{
    require_once "banco2.php";
    
    atualizarUsuario($usu, $nome, $sen, true);

    }

?>