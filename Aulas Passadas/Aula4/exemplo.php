<form action="" method = "get">


<label for=""></label>
<input type="text" type = "" id = "">

</form>




<?php

echo "<h2> AULA - 4 FOR </H2>";


for ($var = 0; $var < 10; $var++) { 
    echo "Viva o php!! - {$var} <br>";
}



echo "<h3>WHILE</h3>";
echo "0 a 50 - 2 em 2:";

$a = 0;

while ($a <= 50) {
echo "{ $a } ";
    $a += 2;
}


//ficou tudo junto pois nn consegui dar br;


$numero = 20;

do{
    echo "<br>Numero: {$numero} <br>" ;
    $numero += 3;

}while($numero < 85);

//lista /arrays;

echo "<h3>LISTA/ARARYS<h3>";
$comidas = array("batata", "cenoura", "miojo");
echo print_r ($comidas);
echo $comidas[2];

echo "<br>";
$comidas[3] = "arroz";
$comidas[1] = 50.3;
echo print_r($comidas);

$totalComidas = count($comidas);
echo "<br> ($totalComidas)";

echo "lista da compra:";

/*for ($i=0; $i < $totalComidas; $i++) { 
    echo "<li> item: ($i): -" . $comidas[$i];
}*/

foreach ($comidas as $comida) {
    echo "<li>item: - ". $comida;
}


$pessoas = array("Andre", 15);






?>