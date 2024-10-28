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
        foreach ($new as $casa){
            if($casa["telefono"] !== ""){
                echo "<tr>";
                echo "<td>{$casa["id"]}</td> <td>{$casa["localidad"]}</td> <td>{$casa["nombre"]}</td> <td>{$casa["telefono"]}</td>";
                echo "</tr>";
            }
                
        }
        echo "</table>";

        

        echo "<table border=1px>";
        foreach ($new as $casa){
            if($casa["telefono"] == ""){
                echo "<tr>";
                echo "<td>{$casa["id"]}</td> <td>{$casa["localidad"]}</td> <td>{$casa["nombre"]}</td> <td>{$casa["telefono"]}</td>";
                echo "</tr>";
            }        
        }
        echo "</table>";
    ?>
</body>
</html>