<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function intercambia(&$a, &$b){
            echo "Valores actuales de a y b : $a , $b";
            echo "<br> Cambiando los valores";
            $c = $a;
            $a = $b;
            $b = $c;
            
            echo "<br>Los valores actuales de a y b : $a , $b";
        }
    
    ?>
</body>
</html>