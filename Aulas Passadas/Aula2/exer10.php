<?php 

    /* Faça um script que peça 2 números inteiros e um número real. Calcule emostre:a. O produto do dobro do primeiro com metade do segundo.b. A soma do triplo do primeiro com o terceiro.c. O terceiro elevado ao cubo.*/

    $numA = 2.4;
    $numB = 4;
    $numC = 6;
    
    $contaA = ($numA * $numA) + ($numB / 2);
    $contaB = ($numA * 3) + $numC;
    $contaC = $numC * $numC *$numC;

    echo "conta da A: " . $contaA . "<br><br>";
    echo "Conta da B: " . $contaB . "<br><br>";
    echo "Conta da C: " . $contaC ;
    

?>