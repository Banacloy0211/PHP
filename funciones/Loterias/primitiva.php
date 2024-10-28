<?php
    $primitiva = []; 
    for ($i = 0; $i < 6; $i++){
        $numRandom = rand(1,49);
        if (in_array($numRandom, $primitiva)){
            $i--;
        }else $primitiva[$i] = $numRandom;
    }
    sort($primitiva);
    $apuesta = implode(" ", $primitiva);
    echo $apuesta;
?>