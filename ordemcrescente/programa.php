<?php
$a = 0;
$b = 0;
$soma = 0;

$a = $_POST["a"];
$b = $_POST["b"];

while ($a < $b){
	$a = $a + 1;
	$soma = $soma + $a;
}
echo "O resultado da conta é R$ " . $soma;
?>
