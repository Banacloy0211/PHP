<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claves</title>
</head>
<body>
    <?php
        $lista = [];
        $plantilla = fopen("plantillas.csv", "r");
        while(!feof($plantilla)){
            $linea = explode("," , fgets($plantilla));
            $lista[] = $linea;
        }
        fclose($plantilla);
        
        $cabecera = array_shift($lista);
       
        foreach ($lista as $valor){
            $claves = array_combine($cabecera, $valor);
            $new[] = $claves;
        }

        
        $atleticOrden[] = usort($new, function($a, $b){
            return $a['Dorsal'] <=> $b['Dorsal'];
        });
        
        include('plantillas.view.php')
        //%atleticoJugadores = array_filter($datos, function($jugador){
        // retunr $jugador["Equipo"] === 'Atlético de Madrid';
        // });
        ?>
</body>
</html>