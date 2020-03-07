
<?php
    include "cabecalho.php";
    include "calcular.php";
    
    for($i=1; $i=2; $i+=0){
        if(calcular()==false){
            if(empty($_SESSION["jogador"])){
                include "jogada1.php";
            }else{
                include "jogada2.php";
            }
        }else{
            break;
        }
    }
    
?>