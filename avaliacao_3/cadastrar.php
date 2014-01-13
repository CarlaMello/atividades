<?php
require_once("menu.php");

session_start();
if (!isset($_SESSION["cadastros"])){
    $_SESSION["cadastros"] = array();
}

$nome = $_REQUEST["nome"];
$cor = $_REQUEST["cor"];
$prazo = $_REQUEST["prazo"];
$descricao = $_REQUEST["descricao"];

$novo = false;
if(isset($_REQUEST["novo"])){
    $novo = true;
}
$produto = array();
$produto["nome"] = $nome;
$produto["cor"] = $cor;
$produto["novo"] = $novo;
$produto["prazo"] = $prazo;
$produto["descricao"] = $descricao;

array_push($_SESSION["cadastros"], $produto);
echo " Cadastro efetuado com sucesso ! ";
?>
