<?php
    $x = $_GET['x'];
    $y = $_GET['y'];
    $suma = $x + $y;
    $resta = $x - $y;
    $multi = $x * $y;
    $divi = $x / $y;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculaora</title>
</head>
<body>
    <table border=1px >
    <tr>
       <th>Valores</th>
       <th>$x y $y</th>
    </tr>
    <tr>
        <td>Suma</td>
        <td>$suma</td>
    </tr>
    <tr>
        <td>Resta</td>
        <td>$resta</td>
    </tr>
    <tr>
        <td>Multiplicación</td>
        <td>$multi</td>
    </tr>
    <tr>
        <td>División</td>
        <td>$divi</td>
    </tr>
    </table>
    
</body>
</html>