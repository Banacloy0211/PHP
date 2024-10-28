<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
    <?php
       
        echo "<table border=1px>";
        foreach ($new as $list){
            if ($list["Equipo"] === 'Atlético de Madrid'){
                echo "<tr>";
                echo "<td>{$list["Dorsal"]}</td> <td>{$list["Nombre"]}</td> <td>{$list["Apellidos"]}</td> <td>{$list["Posicion"]}</td> <td>{$list["Equipo"]}</td>";
                echo "</tr>";
            }
        }
        echo "</table>";
    ?>
</body>
</html>