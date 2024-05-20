<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 BANCO</title>
</head>
<body>

<?php
require_once "banco.php";

require_once "form-login.php";

$usu = $_POST['usuario'] ?? null;
$sen = $_POST['senha'] ?? null;

if(is_null($usu) || is_null($sen)){
    require_once "form-login.php";
}else{
    echo "~ [usuario:$usu - Senha:$sen]";
    
    $busca = buscarUsuario($usu);

    if($busca ->num_rows == 0){
        echo "<br>Usuario nao existe";
    }else{
        echo "<br> boa";

        $obj = $busca->fetch_object();
        echo "<br>" . $obj->usuario;
        echo "<br>" . $obj->nome;
        echo "<br>" . $obj->senha;

        // if($sen === $obj->senha)

        if(password_verify($sen, $obj->senha)){
            echo "<br> sucesso!";
        }else{
            echo "<br> sem sucesso!";
        }
    }
    
    echo "<br>" . password_hash("123", PASSWORD_DEFAULT);

    
}



?>
    
</body>
</html>