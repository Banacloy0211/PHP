<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function contar ($num1, $num2){
            for($i = $num1; $i <= $num2; $i++){
                echo $i;
                echo '<br>';
            }
        }
        contar(15,25);
    ?>
</body>
</html>