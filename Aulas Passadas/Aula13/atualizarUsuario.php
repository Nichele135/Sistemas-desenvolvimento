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
$nom = $_POST['nome'] ?? "";
$sen = $_POST['senha'] ?? "";

if(is_null($usu) || $sen == ""){
    require_once "form-criar-usuario.php";
}else{
    require_once "form-criar-usuario.php"; // para testes
    echo "<h3>Usuario $usu atualizado..</h3>";
    // echo "~ [Usuario: $usu - Nome: $nom - Senha: $sen] ~ <br>";
    atualizarUsuario($usu, $nom, $sen, false);
    
}


?>