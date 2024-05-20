<form action="" method="post">

    <h1>Novo Usuario</h1>

    <label for="">Usuario:</label>
    <input name="usuarioNovo" type="text" id="">
    <br>
    <br>
    <br>
    
    <label for="">Nome:</label>
    <input name="nomeNovo" type="text" id="">
    <br>
    <br>
    <br>

    <label for="">Senha:</label>
    <input name="senhaNovo" type="password" id="">
    <br>
    <br>
    <br>

    <button type="submit">criar</button>


</form>

<?php
    $banco = new mysqli("localhost:3307", "root", "", "db_aulasegunda");

    require_once "banco2.php";

$usu = $_POST['usuarioNovo'] ?? null;
$nome = $_POST['nomeNovo'] ?? null;
$sen = $_POST['senhaNovo'] ?? null;

if(is_null($usu) || is_null($sen)){
    require_once "banco2.php";
}else{
    
    criarUsuario($usu, $nome, $sen, true);

        echo "SUCESSO";
    }
    

?>