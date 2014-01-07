<html>
    <head>
        <title>Cadastro de pessoas </title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="remover.php" method="post">
            <label>Digite o código de pessoas para remover</label> </br>
            <input type="text" name="id" />
            <input type="submit" value="Remover" />
        </form>
    
    </body>
</html>

<?php
    require_once("menu.php");
    
    session_start();
    if (isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $pessoa){
            if ($pessoa != null){
                echo "[$id] => $pessoa </br>";
            }
        }
    }
    
    else{
        $id = $_REQUEST["id"];
         
         $cadastros =& $_SESSION["cadastros"];
         $cadastros[$id] = null;
         
         echo "Não existem pessoas cadastradas";
    }
    ?>
