<?php
date_default_timezone_set("Brazil/East");
echo '<meta http-equiv= "refresh" content="1">';
$dataAtual = getdate();


$diaSemana = $dataAtual["wday"];
switch ($diaSemana){

	case 0:
		echo " Domingo ";
		break;
	case 1:
		echo " Segunda ";
		break;
	case 2:
		echo " Terça ";
		break;
	case 3:
		echo " Quarta ";
		break;
	case 4:
		echo " Quinta ";
		break;
	case 5:
		echo " Sexta ";
		break;
	case 6:
		echo " Sabado ";
		break;
}
echo ", ";

echo $dataAtual["mday"]. "/" . $dataAtual["mon"] . "/" .$dataAtual["year"];
echo " ";
echo $dataAtual["hours"] - 1 . ":" . $dataAtual["minutes"] . ":" . $dataAtual["seconds"];
echo " ";
?>
