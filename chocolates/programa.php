<?php
$contagem = 0;
$chocE = 0;
$chocB = 0;
$promoE = 0;
$promoB = 0;

$chocE  = $_POST["chocE"];
$chocB = $_POST["chocB"];

$contagem = 3;
while($contagem <= $chocE){
	$promoB = $promoB + 1;
	$contagem = $contagem + 3;
}
$contagem = 2;
while($contagem <= $chocB){
	$promoE = $promoE + 1;
	$contagem = $contagem + 2;
}
$contagem = 5;
while($contagem <= $chocB + $chocE){
	$promoB = $promoB + 1;
	$contagem = $contagem + 5;
}

echo "Você ganhou essa quantidade de chocolate branco: " . ($promoB + $chocB);
echo "</br>";
echo "Você ganhou essa quantidade de chocolate escuro: " . ($promoE + $chocE);

?>
