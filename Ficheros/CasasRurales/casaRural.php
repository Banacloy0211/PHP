<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casas Rurales</title>
</head>
<body>
    <?php
        $lista = [];
        $casaRural = fopen("casasRurales.csv", "r");
        
        while(!feof($casaRural)){
            $linea = explode(";" , fgets($casaRural));
            $lista[] = $linea;
        }
        fclose($casaRural);

       $cabecera = array_shift($lista);

        foreach ($lista as $valor){
            $claves = array_combine($cabecera, $valor);
            $new[] = $claves; 
             
        } 
        include('casaRural.view.php')
    ?>
</body>
</html>