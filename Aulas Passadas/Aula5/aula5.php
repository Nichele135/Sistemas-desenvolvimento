<?php

    // function Andre(){
    //     echo "Testando minha funcao";
    // }

    // Andre();

    // function criarTitulo($text){
    //     echo "<h1>{$text}</h1>";
    // }

    // function tituloLegal($text){
    //     echo "<h2>==================<?h2>";
    //     echo "<h2>======={$text}======<?h2>";
    //     echo "<h2>==================<?h2>";
    // }

    // criarTitulo("titulo aula 5 - funcoes");
    // criarTitulo(15646);

    
    
    // //funcao para fazer a media 
    // function calcularMedia($nome, $nota1, $nota2){
    //         $media = ($nota1 + $nota2) / 2;
    //         if ($media >= 7) {
    //             echo "O aluno(a) {$nome} ja foi aprovado9 com media {$media}";
    //         }else {
    //             echo "O aluno(a) {$nome} foi reprovado com media {$media}"; 
    //         }
    // }
    
    // calcularMedia("Andre", 10.0, 6.0);

    // //Nessa function voce pode somar varios numeros de uma vez, basta colcoar la em baixo entre ();

    // function somarNum(...$numeros){
        
    //     echo print_r($numeros);

    //     $soma = 0;

    //     foreach ($numeros as $num) {
    //         $soma += $num;
    //     }

    //     echo "Soma: {$soma}";

    // }
    
    // echo "<br><br><br><br>Listinha de soma: ";
    // somarNum(5,5,5,5,5,5,5);






    // //jeito mais facil de somar numero com numero
    // function soma($num1, $num2){
        
    //     $soma = $num1 + $num2;

    //     echo "<li> A soma do {$num1} + {$num2} = {$soma}";
    // }
    
    // echo "Listinha de soma: ";
    // somarNum();


    // echo "<br><br><br><br><br><br>";



    // //caso a funcao for falsa ela nao passam pelo if;
    // $verdadeiro = true;

    // if ($verdadeiro) {

    // function pessoa($nome, $idade){
    //     echo "nome: {$nome} e idade: {$idade}";
    // }

    // }

    // pessoa("andre", 18);



    // echo "<br><br><br><br><br><br>";

    
    
    // //so posso chamar a funcvao Heman caso a funcao thunder for chamada, caso tentar de outra forma nao da certo;
    // function thunderCats(){
    //     echo "Thunder Thunder";

    //     function heMan(){
    //         echo "<br>Eu tenho a força!!!";

    //     }
    // }

    // thunderCats();
    // heMan();

    // echo "<br><br><br><br><br><br>";

    // function somaPandora(&$numero){
    //     $numero += 5;
    //     //echo $numero;
    // }

    // $valor = 10;
    // echo "<br>Variavel valor: {$valor}";
    // somaPandora($valor);
    // echo "<br> Variavel valor: {$valor}";

    // function sub($n1, $n2){
    //     $sub = $n1 - $n2;
        
    //}

    function fatorial($num){
        
        $calc = 1;

        for ($i=$num; $i > 0; $i--) { 
            
            $calc *= $num;
            echo $num . " ";
            $num--;
            
        }
        echo  " = " . $calc; 
    }
    
    fatorial(5);

?>