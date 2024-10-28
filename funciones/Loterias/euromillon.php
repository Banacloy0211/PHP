<?php

    $euromill = []; 
    for ($i = 0; $i < 5; $i++){
        $numRandom = rand(1,50);
        if (in_array($numRandom, $euromill)){
            $i--;
        }else $euromill[$i] = $numRandom;
    }
    sort($euromill);
    $apuesta = implode(" ", $euromill);
    echo $apuesta;

    
    $numsEstrella = [];
    for($x = 0 ; $x < 2; $x++){
        $estrella = rand(1,9);
        if (in_array($estrella, $numsEstrella)){
            $x--;
        }else $numsEstrella[$x] = $estrella;
    }
    $premioEstrellas = implode (" ", $numsEstrella);
    echo " ", $premioEstrellas;
    
?>