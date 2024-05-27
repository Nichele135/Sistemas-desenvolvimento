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

    function criarUsuario($usuario, $nome, $senha){
        global $banco;

        // $q = "INSERT INTO usuarios(cod, usuario, nome, senha) VALUES (NULL, 'pedroca', 'pedro', '122')";

        $senha = password_hash($senha, PASSWORD_DEFAULT);
        // createOnDB("usuarios(cod, usuario, nome, senha)", "(NULL, '$usuario', '$nome', '$senha')");

        $q = "INSERT INTO usuarios(cod, usuario, nome, senha) VALUES (NULL, '$usuario', '$nome', '$senha')";
        
        $resp = $banco->query($q);
        echo "Query: $q";
        echo var_dump($resp);
    }


    function atualizarUsuario($usuario, $nome="", $senha="", $debug=false){
        global $banco;
        
        if($nome != "" && $senha != ""){
            $senha = password_hash($senha, PASSWORD_DEFAULT);
            $set = "nome='$nome', senha='$senha'";
        }else if($nome != ""){
            $set = "nome='$nome'";
        }else if($senha != ""){
            $senha = password_hash($senha, PASSWORD_DEFAULT);
            $set = "senha='$senha'";
        }


        function createOnDB($into, $values){
            global $banco;
    
            $q = "INSERT INTO $into VALUES $values";
    
            $resp = $banco-> query($q);
            echo "Query: $q";
            echo var_dump($resp);
    
    
        }

        function updateBanco($database, $set, $where, bool $debug = false) : void{
            global $banco;
            $q = "UPDATE $database SET $set WHERE $where";
            
            $resp = $banco->query($q);
            if($debug){
                echo "Query: $q";
                echo var_dump($resp);
            }
        }

        function updateOnDB($database, $set, $where, bool $debug = false) : void{
            echo "A";
            global $banco;
            $q = "UPDATE $database SET $set WHERE $where";
            
            $resp = $banco->query($q);
            if($debug){
                echo "Query: $q";
                echo var_dump($resp);
            }
        }
    

        function deleteFromDB($database, $where, $debug){
            global $banco;

            $q = "DELETE FROM $database WHERE $where";
            $resp = $banco->query($q);

            if($debug){
                echo "QUERY: $q";
                echo var_dump($resp);
            }

        }

        function deletarUsuario($usuario){
            global $banco;

            $q = "DELETE FROM usuarios WHERE usuario='$usuario'";
            $resp = $banco->query($q);

            echo "Query: $q";
            echo var_dump($resp);
        }


        // $q = "UPDATE usuarios SET senha ='$senha' WHERE usuario='$usuario'";
        $q = "UPDATE usuarios SET $set senha ='$senha' WHERE usuario='$usuario'";
        
        $resp = $banco->query($q);

        if($debug){
            echo "QUERY: $q";

        }

        echo "QUERY: $q";
        echo var_dump($resp);

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