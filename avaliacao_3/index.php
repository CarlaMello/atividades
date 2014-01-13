<style>
    .amarelo{
        color: yellow;
    }
    .vermelho{
        color: red;
    }
    .rosa{
        color:pink ;
    }
    .verde{
        color: green;
    }
    .azul{
        color: blue;
    }
    .outros{
        color: black;
    }
</style>


<?php
    require_once("menu.php");
    
    session_start();
    
    if (isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        echo "<dl>";
        foreach($cadastros as $produto){
            $cor = $produto["cor"];
            $novo = $produto["novo"];
            
            if($produto != null){
               echo "<dt class='$cor'>" . $produto["nome"] . "</dt>";
               echo "<dd>Cor: "  . $cor . "</dd>";
               echo "<dd>Prazo : " . $produto["prazo"] . "<dd>";
               echo "<dd>Detalhes: " . $produto["descricao"] . "<dd>";
               echo "<dd>Produto Novo: ";
               if($novo){
                    echo "Sim";
                }
               else{
                    echo "Não";
               }
               
               
            }
        }
        echo "</dl>";
    }
    else{
        echo "Não existem produtos cadastrados";
    }
    ?>
