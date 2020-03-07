<?php
    function calcular($a, $b, $nomejogador){

        // posiçoes check X
        if($a[0][0] && $a[0][1] && $a[0][2]){
            //deu velha
            $c=true;
            return $c;
        }

        if($a[1][0] && $a[1][1] && $a[1][2]){
            //deu velha
            $c=true;
            return $c;
        }

        if($a[2][0] && $a[2][1] && $a[2][2]){
            //deu velha
            $c=true;
            return $c;
        }

        if($a[0][0] && $a[1][0] && $a[2][0]){
            //deu velha
            $c=true;
            return $c;
        }

        if($a[0][1] && $a[1][1] && $a[1][2]){
            //deu velha
            $c=true;
            return $c;
        }

        if($a[0][2] && $a[1][2] && $a[2][2]){
            //deu velha
            $c=true;
            return $c;
        }

        if($a[0][0] && $a[1][1] && $a[2][2]){
            //deu velha
            $c=true;
            return $c;
        }

        if($a[0][2] && $a[1][1] && $a[2][0]){
            //deu velha
            $c=true;
            return $c;
        }



        // posiçoes check O
        if($b[0][0] && $b[0][1] && $b[0][2]){
            //deu velha
            $c=true;
            return $c;
        }

        if($b[1][0] && $b[1][1] && $b[1][2]){
            //deu velha
        }

        if($b[2][0] && $b[2][1] && $b[2][2]){
            //deu velha
        }

        if($b[0][0] && $b[1][0] && $b[2][0]){
            //deu velha
        }

        if($b[0][1] && $b[1][1] && $b[1][2]){
            //deu velha
        }

        if($b[0][2] && $b[1][2] && $b[2][2]){
            //deu velha
        }

        if($b[0][0] && $b[1][1] && $b[2][2]){
            //deu velha
        }

        if($b[0][2] && $b[1][1] && $b[2][0]){
            //deu velha
        }
    }
    for($i=0; $i=2; $i++){
        if($_SESSION["linha"][1] == "x"){

        }
        for($a=0; $a=2; $a++){
            $_SESSION["coluna"][$a];
        }
    }
?>