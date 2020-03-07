<?php
    include "classjogador.php";
    include "cabecalho.php";

    $c = new jogador($_POST["nome"],$_POST["simbolo"]);

    $_SESSION["jogador"][] = $c;
    if(!empty($_SESSION["jogador"][1])){
        header("Location: indexjogo.php");
    }else{
        header("Location: index.php");
    }
?>
</body>
</html>