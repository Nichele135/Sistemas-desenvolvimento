<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <style>

    </style>

</head>

<body>
    <h1>Calculadora PHP</h1>

        <form action="" method="post">

            <label for="num1"></label>
            <input name="num1" type="text" id="num1" placeholder="Numero 1">

            <select name="operador" id="operador">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="^">^</option>
                <option value="!">!</option>
            </select>


        <label for="num2"></label>
        <input name="num2" type="text" id="num2" placeholder="Numero2">

        <button type="submit">Calcular</button>
        <button type="submit" name="historico">Histórico</button>
        <input type="submit" name="limpar" value="Limpar Histórico">

        </form>

<?php

    session_start();

        // Serve para mostrar o historico
        if (isset($_POST['historico'])) {
            if (!empty($_SESSION['historico'])) {
                echo "<h2>Histórico:</h2>";
                foreach ($_SESSION['historico'] as $op) {
                    echo "$op<br>";
                }
            }
        }
        //serve para limpar o historico

        if (isset($_POST['limpar'])) {
            unset($_SESSION['historico']);
        }

        //if para mudar os numeros para inteiros, pois sempre dava erro no resultado, pesquisei muito mas so consegui achar essa solucao

        if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operador'])) {
            $num1 = intval($_POST['num1']);
            $num2 = intval($_POST['num2']);
            $operador = $_POST['operador'];


        //Iniciando a function
            conta($operador, $num1, $num2);
        }
        
        //aqui criei uma function para fazer as contas pedidas
        function conta($operador, $num1, $num2){



            switch ($operador) {
                case '+':
                    $resultado = $num1 + $num2;
                    break;
                case '-':
                    $resultado = $num1 - $num2;
                    break;
                case '*':
                    $resultado = $num1 * $num2;
                    break;
                case '/':
                    $resultado = $num1 / $num2;
                    break;
                case '^':
                    $resultado = pow($num1, $num2);
                    break;
                case '!':
                    $resultado = calcularFatorial($num1);
                    break;
                default:
                    $resultado = "Digite novamente";
                    break;
            }


            if($num1 == 0 || $num2 == 0 ){
            } else {
            $_SESSION['historico'][] = "$num1 $operador $num2 = $resultado";
        }   
        
        echo $resultado;
}


        //function para calcular o fatorial achei mais facil fazer assim do que deixar uma bagunça la dentro do switch
        function calcularFatorial($num){
            if ($num == 0) {
                return 1;
            } else {
                return $num * calcularFatorial($num - 1);
            }
        }




?>



    

</body>

</html>