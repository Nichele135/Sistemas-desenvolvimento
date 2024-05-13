<pre>
<?php
//esse pre serve para visusalizar o banco melhor

    $banco = new mysqli("localhost:3307", "root", "", "db_aulasegunda");

    function buscarUsuario($usuario){
        global $banco;
        $q = "SELECT usuario, nome, senha FROM usuarios WHERE usuario = '$usuario'";
        $busca = $banco->query($q);
        
        return $busca;
    }

 /*   $busca = $banco ->query("SELECT * FROM usuarios");
    echo var_dump($busca);
    echo "<br>------------------<br>";

    // $obj = $busca->fetch_object();
    // echo var_dump($obj);

    echo "<br>------------------<br>";
    

    while($obj = $busca->fetch_object()){
        echo var_dump($obj);
    }
    echo "<br>------------------<br>";

    echo "<br>------------------<br>";
    $busca = $banco ->query("SELECT usuario, nome, senha FROM usuarios WHERE usuario = 'zezinho'");
    echo var_dump($busca);

    $obj = $busca->fetch_object();
    echo "<br>" . $obj->usuario;
    echo "<br>" . $obj->nome;
    echo "<br>" . $obj->senha;
*/


    //serve para alterar a senha no banco de daods
    // $q = "UPDATE usuarios SET senha='senhaaa' WHERE usuario='pedroca'";
    // $resp = $banco->query($q);
    // echo "QUERY: $q";
    // echo var_dump($resp);


    //serve para deletar usuario
    // $q = "DELETE FROM usuarios WHERE usuario='zezinho'";
    // $resp = $banco->query($q);
    // echo "QUERY: $q";
    // echo var_dump($resp);

    //Adiciona no banco
    // $q = "INSERT INTO usuarios(cod, usuario,nome,senha) VALUES (null, 'Andrezin', 'Andre', '1503')";
    // $resp = $banco->query($q);
    // echo "QUERY: $q";
    // echo var_dump($resp);
?>
</pre>