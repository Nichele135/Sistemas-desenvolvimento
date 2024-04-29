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

    <?php
        
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        
        function conta($num1, $num2){

        $operador = $_POST['operador'];

            switch ($operador) {
                case '+':
                    echo $num1 + $num2;
                    break;
                case '-':
                    echo $num1 - $num2;
                    break;
                case '*':
                    echo $num1 * $num2;
                    break;
                case '/':
                    echo $num1 / $num2;
                    break;
                case '^':
                    echo $num1 ^ $num2;
                    break;
                case '!':
                    echo $num1 ! $num2;
                    break;
                
                default:
                    echo "Digite novamente";
                    break;
            }

        }
        conta($num1, $num2);


    ?>

</form>
    
</body>
</html>