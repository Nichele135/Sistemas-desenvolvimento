<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #ff6b6b, #ffa500, #ffff00, #00ff00, #00ffff, #0000ff, #ff00ff);
    background-size: 1000% 1000%;
    animation: rainbow-animation 30s ease infinite;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.calculator {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    width: 300px;
}

#h1 {
    margin-top: 0;
    text-align: center;
}

#form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

#num1,
#num2,
#operador {
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    width: 100%;
}

button {
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    width: 100%;
}

button:hover {
    background-color: #0056b3;
}

#resultado {
    background-color: #f0f0f0;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
}

#historico {
    margin-top: 20px;
    text-align: left;
}

h1:hover {
    background: linear-gradient(to right, #ff0000, #ff9900, #ffff00, #00ff00, #00ffff, #0000ff, #ff00ff);
    background-size: 200% 200%;
    animation: rgb-animation 3s ease infinite;
    border-radius: 8px;
    padding: 10px 20px;
    box-shadow: 0px 0px 15px 0px rgba(255, 255, 255, 0.5);
    transition: all 0.3s ease;
}

@keyframes rgb-animation {
    0% {
        background-position: 0% 50%;
    }

    50% {
        background-position: 100% 50%;
    }

    100% {
        background-position: 0% 50%;
    }
}

@keyframes rainbow-animation {
    0% {
        background-position: 0% 50%;
    }

    50% {
        background-position: 100% 50%;
    }

    100% {
        background-position: 0% 50%;
    }
}

@keyframes color-change {
    0% {
        color: #ff0000;
    }

    25% {
        color: #00ff00;
    }

    50% {
        color: #0000ff;
    }

    75% {
        color: #ffff00;
    }

    100% {
        color: #ff00ff;
    }
}

@keyframes size-change {
    0% {
        font-size: 16px;
    }

    50% {
        font-size: 20px;
    }

    100% {
        font-size: 16px;
    }
}
</style>

    </style>
</head>

<body>
    <div class="calculator">
        <h1 id="h1">Calculadora PHP</h1>

        <form id="form" action="" method="post">

            <label for="num1"></label>
            <input name="num1" type="text" id="num1" placeholder="Numero 1">

            <select name="operador" id="operador">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="">*</option>
                <option value="/">/</option>
                <option value="^">^</option>
                <option value="!">!</option>
            </select>

            <label for="num2"></label>
            <input name="num2" type="text" id="num2" placeholder="Numero 2">

            <button type="submit">Calcular</button>
            <button type="submit" name="historico">Histórico</button>
            <input type="submit" name="limpar" value="Limpar Histórico">

        </form>

        <div id="resultado">
            <?php
            session_start();

            // Serve para mostrar o histórico
            if (isset($_POST['historico'])) {
                if (!empty($_SESSION['historico'])) {
                    echo "<h2>Histórico:</h2>";
                    foreach ($_SESSION['historico'] as $op) {
                        echo "$op<br>";
                    }
                }
            }

            // Serve para limpar o histórico
            if (isset($_POST['limpar'])) {
                unset($_SESSION['historico']);
            }

            
            // Função para realizar os cálculos
            function calcular($operador, $num1, $num2)
            {
                switch ($operador) {
                    case '+':
                        return $num1 + $num2;
                    case '-':
                        return $num1 - $num2;
                    case '*':
                        return $num1 * $num2;
                    case '/':
                        if ($num2 == 0) {
                            return "Não é possível dividir por zero.";
                        }
                        return $num1 / $num2;
                    case '^':
                        return pow($num1, $num2);
                    case '!':
                        return calcularFatorial($num1);
                    default:
                        return "Digite novamente.";
                    }
                }
                
                // Função para calcular o fatorial
                // Se os números e operador forem definidos, realiza o cálculo
                if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operador'])) {
                    $num1 = intval($_POST['num1']);
                    $num2 = intval($_POST['num2']);
                    $operador = $_POST['operador'];
    
                    // Inicia a função de cálculo
                    $resultado = calcular($operador, $num1, $num2);
    
                    // Salva o histórico se os números não forem zero
                    if ($num1 != 0 && $num2 != 0) {
                        $_SESSION['historico'][] = "$num1 $operador $num2 = $resultado";
                    }
    
                    echo $resultado;
                }
                function calcularFatorial($num)
            {
                if ($num == 0) {
                    return 1;
                } else {
                    return $num * calcularFatorial($num - 1);
                }
            }
            ?>
        </div>

        <div id="historico">
            <!-- O histórico será exibido aqui -->
        </div>
    </div>
</body>

</html>