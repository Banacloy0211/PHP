<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $personas = array(
            array
            (
                'nombre' => 'Jose',
                'altura' => 169,
                'mail' => 'jos@mail.com'
            ),
            array
            (
                'nombre' => 'Paco',
                'altura' => 178,
                'mail' => 'pacomernos@mail.com'
            ),
            array
            (
                'nombre' => 'Emilio',
                'altura' => 198,
                'mail' => 'emi@mail.com'
            )
        );
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Altura</th><th>Mail</th></tr>";
        foreach($personas as $persona){
            echo "<tr>";
            echo "<td>{$persona['nombre']}</td>";
            echo "<td>{$persona['altura']}</td>";
            echo "<td>{$persona['mail']}</td>";
            echo "</tr>";    
        }
        echo "</table>";
    ?>
</body>
</html>