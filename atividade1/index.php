<?php
    include "cabecalho.php";
    if(empty($_SESSION["jogador"])){
        include "jogador1.php";
    }else{
        include "jogador2.php";
    }
?>