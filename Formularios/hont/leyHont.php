<?php
function hont($votos, $partidos) {
    $numEscanos = [];  
    $maxEscanos = 0;   

    // Primer bucle: calculamos 
    for ($i = 1; $i <= 7; $i++) {
        for ($j = 0; $j < count($votos); $j++) {
            $escanos = round($votos[$j] / $i, 1); 
            $numEscanos[$partidos[$j]][] = $escanos;  //Array asociativo para almacenar escaños
            if ($escanos > $maxEscanos) {  
                $maxEscanos = $escanos;    
            }
            
        }
    }

    
    echo "<table border='1'>";
    echo "<tr><th>Ronda</th>";
    foreach ($partidos as $partido) {
        echo "<th>{$partido}</th>";
    }
    echo "</tr>";

    for ($i = 1; $i <= 7; $i++) {
        echo "<tr><td>{$i}</td>";  // Mostramos el número de la ronda
        for ($j = 0; $j < count($votos); $j++) {
            $escanos = $numEscanos[$partidos[$j]][$i - 1];  // Recuperamos los escaños calculados
            if ($escanos == $maxEscanos) {
                // Resaltamos con fondo los mayores escaños
                echo "<td style='background-color: yellow;'>{$escanos}</td>";
            } else {
                echo "<td>{$escanos}</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

    $partidos = ["Partido A", "Partido B", "Partido C", "Partido D"];
    $votos = [500000, 300000, 150000, 50000];
    hont($votos, $partidos);
?>
