<form action="" method="get">

<label for="nota1">Digite a nota 1: </label>
<input name="nota1" type="text" id="nota1">

<label for="nota2">Digite a nota 2: </label>
<input name="nota2" type="text" id="nota2">

<label for="nota3">Digite a nota 3: </label>
<input name="nota3" type="text" id="nota3">

<button type="submit">Enviar</button>

</form>


<?php


$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];

$conta = ($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5);
$pesos = 2 + 3 + 5;
$media = $conta / $pesos;

echo " A media ponderada é: " . $media;


?>

