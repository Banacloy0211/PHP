<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $curriculum_en = "Cursando 2º DAW. Y mis idiomas son Castellano (Nativo), Valenciano (Avanzado) e Ingles (Medio)";
        $idioma = "en";
        $texto = "curriculum_" . $idioma;
        
        echo $$texto;

    ?>
</body>
</html>