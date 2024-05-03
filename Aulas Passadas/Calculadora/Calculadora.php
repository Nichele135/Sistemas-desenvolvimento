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

    <?php

        $historico = '';

        if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['historico'])) {
         // Recupera os números e o operador
        $num1 = $_POST['num1'];
        $historicoN1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $historicoN2 = $_POST['num2'];
        $operador = $_POST['operador'];
        $historicoOP = $_POST['operador'];
        
        
        switch ($operador) {
            case '+':
                $resultado = $num1 + $num2;
                echo $resultado;
                break;
                case '-':
                    $resultado = $num1 - $num2;
                    echo $resultado;
                    break;
                    case '*':
                        $resultado = $num1 * $num2;
                        echo $resultado;
                        break;
                        case '/':
                            if ($num2 == 0) {
                                echo "ERRO, divisão por zero!!!";
                            } else {
                                $resultado = $num1 / $num2;
                                echo $resultado;
                            }
                            break;
                            case '^':
                                //pesquisei pelo chat esse pow
                                $resultado = pow($num1, $num2);
                                echo $resultado;
                                break;
                                case '!':
                    echo factorial($num1);
                    echo "  (Caso tentou preencher a segunda caixa, só ira aparecer o factorial do primeiro número informado)";
                    break;
                    
                    default:
                    echo "Informe um numero válido";
                    break;
                }
                $historico = "$num1 $operador $num2 = $resultado";
            }
            
            if (isset($_POST['historico'])) {
            echo "<h2>Histórico:</h2>";
            echo "$historicoN1 $historicoOP $historicoN2";
        } elseif (isset($_POST['historico']) && empty($historico)) {
            echo "<h2>Histórico:</h2>";
            echo "Nenhum histórico disponível.";
        }


        function factorial($num){
            if ($num == 0) {
                return 1;
            }
            return $num * factorial($num - 1);
        }


    ?>

</form>
    
</body>
</html>