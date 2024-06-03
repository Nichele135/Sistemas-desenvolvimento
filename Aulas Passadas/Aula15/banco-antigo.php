<?php 

        $banco = new mysqli("localhost:3307", "root", "", "db_aulaSegunda");    
       

        /*function createOnDB($into, $values){
            global $banco;
            
            $q = "INSERT INTO $into VALUES $values";
        
            $resp = $banco->query($q);
            echo "<br> Query: $q"; 
            echo var_dump($resp);
        }*/

        function fazerLogin(string $usuario, string $senha) : bool {
            global $banco;
            $q = "SELECT cod, usuario, nome, senha FROM usuarios  WHERE usuario='$usuario'";

            $busca = $banco->query($q);

            if($busca->num_rows > 0){
                $usu = $busca->fetch_object();
                
                // if($s === $usu->senha){
                if(password_verify($senha, $usu->senha)){
                    return true;
                }else{
                    $resp = "Senha Inválida :/";
                    return false;
                }
                
            }

            return false;
            
        }

        function criarUsuario(string $usuario, string $nome, string $senha, $debug = false) : void {
            global $banco;

            $senha = password_hash($senha, PASSWORD_DEFAULT);

            $q = "INSERT INTO usuarios(cod, usuario, nome, senha, tipo) VALUES (NULL, '$usuario', '$nome', '$senha', 'admin')";
        
            $resp = $banco->query($q);
            
            if($debug){
                echo "<br> Query: $q"; 
                echo var_dump($resp);
            }
        }
    
        function deletarUsuario(string $usuario, $debug = false) : void {
            global $banco;
    
            $q = "DELETE FROM usuarios WHERE usuario='$usuario'";
            
            $resp = $banco->query($q);

            if($debug){
                echo "<br> Query: $q"; 
                echo var_dump($resp);
            }
        }
        
        function atualizarUsuario(string $usuario, string $nome="", string $senha="", bool $debug=false) : void {
            global $banco;
    
            $set = "";
            if($nome != "" & $senha != ""){
                // os dois
                $novaSenha = password_hash($senha, PASSWORD_DEFAULT);
                $set = "nome='$nome', senha='$novaSenha'";
            } else if($nome != ""){
                // só o nome
                $set = "nome='$nome'";
            } else if ($senha != ""){
                // só a senha
                $novaSenha = password_hash($senha, PASSWORD_DEFAULT);
                $set = "senha='$novaSenha'";
            }
            
            $q = "UPDATE usuarios SET $set WHERE usuario='$usuario'";
            
            $resp = $banco->query($q);
    
            if($debug){
                echo "<br> Query: $q"; 
                echo var_dump($resp);
            }
    
        }


   


?>
</pre>