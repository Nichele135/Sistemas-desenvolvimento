<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $cod = $_GET["p"] ?? null;
    $nome = $_POST["nome"] ?? null;
    $empresa = $_POST["empresa"] ?? null;

    if(is_null($cod)){
        echo "nenhum produto para editar";
        return;
    }

    require_once "banco2.php";

    if(is_null($nome) || is_null($empresa)){
        $q = "SELECT nome, empresa_cod FROM smartphone WHERE cod='$cod'";
        
        $busca = $banco->query($q);
        $obj_smart = $busca->fetch_object();
        $nome = $obj_smart->nome;
        $empresa = $obj_smart->empresa_cod;
    }else{
        // updateBanco("smartphone", "nome='$nome', empresa_cod='$empresa'", "cod='$cod'");        nao deu certo essa merda nn sei pq
         $q = "UPDATE smartphone SET nome='$nome', empresa_cod='$empresa' WHERE cod='$cod'";
         $resp = $banco->query($q);
        header("Location: Aula13.php");
    }



?>
    

<form action="" method="post">


    <label for="">Cod:</label>
    <input name="cod" type="text" value="<?=$cod?>" disabled>

    <label for="">nome:</label>
    <input name="nome" type="text" placeholder="<?=$nome?>">

    <label for="">empresa:</label>
    <input name="empresa" type="text" value="<?=$empresa?>">

    <input type="submit" value="Salvar">

</form>
    
</body>
</html>