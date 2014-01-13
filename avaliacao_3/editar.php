<?php
    require_once("menu.php");
    
    session_start();
    if (!isset($_SESSION["cadastros"])){
        echo "Não existem produtos para editar";
    }
    else{
        $id = $_REQUEST["id"];
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
        
        
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = $produto;
        
        echo "Edição efetuada com sucesso !";
        
    }
