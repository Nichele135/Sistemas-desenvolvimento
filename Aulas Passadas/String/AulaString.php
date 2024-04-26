<?php

    echo "<h1>Aula 07<h1>";

    function quebra(){
        echo "\n<br>\n";
    }

    $str = "Janela";
    echo $str[-1];

    $str[2] = "o";
    echo $str;

    quebra();

    echo $str[0] . "\noão";

    quebra();

    $tamanho = strlen($str);

    echo "Tamanho da STR:" . $tamanho;

    quebra();

    for ($i=0; $i < $tamanho; $i++) { 
        echo "<br>" . $str[$i];
    }

    //"" . ''

    echo "<br><br>um teste legal";
    echo '<br><br>outro teste';

    echo "<br> olha \n essa string";
    echo '<br> olha \n essa string';

    $teste = "Jean";
    echo "O {$teste} agora parou de fala";
    echo 'O {$teste} agora parou de fala';
    
    quebra();
    quebra();
    
    //heredoc
    $novaVar = 80;
    $heredoc = <<<TESTE

        <h2>O titulo da pagina</h2>
        <p>O texto da pagina</p>
        <p>{$novaVar}</p>

    TESTE;
    echo $heredoc;


    //nowdoc

    $nowdoc = <<<'outroTeste'

    <h2>O titulo da pagina</h2>
    <p>O texto da pagina</p>
    <p>{$novaVar}</p>


    outroTeste;

    echo $nowdoc;

    quebra();

    $tamanho = strlen("12313hdoa");
    echo "Tmanho:" . $tamanho;

    $str = "McDionalds";
    $parte = strlen($str, 2, 8);
    echo "<br>Str: {$str}";
    echo "<br>PArte: {$parte}";

    echo "<br>Maiusculo:". strtoupper($parte);
    echo "<br>Minusculo:". strtolower($parte);

    quebra();

    $nova = str_replace($parte, "ui", "");
    echo "<br>Nova: {$nova}";

    /*
    number_format() - formatar numero
    printf() - formatar algo especifico
    print_r() - mostrar o array

    var_dump()  - mostra array e tipo de variaveis

    trim() - remove espaço antes e depois da string
    ltrim()
    rtrim()

    str_word_count() - contar a quantidade de palavras que tem na string
    explode() - quebras elas em array
    str_split()
    implode() 
    join()


    strtoupper() - Todas as plavras em maiusculo
    strtolower() - Todas as plavras em minusculo
    ucfirst() - so essa maiuscula
    ucwords() - As palavras ficam assim

    strrev - nome -emon / inverte a palavra
    strpos()
    stripos()

    str_pad_left
    str_pad_right
    str_pad_both

    */
    






    



?>