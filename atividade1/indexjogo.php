
<?php
    include "cabecalho.php";
    include "calcular.php";
    $jogada=0;
    for($i=1; $i=2; $i+=0){
        echo'<form action="indexjogo.php" method="POST">';
        if(calcular()==false){
            if($jogada==0){
                include "jogada1.php";
                $jogada=1;
            }else{
                include "jogada2.php";
                $jogada=0;
            }
        }else{
            break;
        }
        echo'</form>';
    }
    
?>