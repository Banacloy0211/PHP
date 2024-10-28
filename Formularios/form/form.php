<?php
    if (isset($_POST['aficion'])){
        $afic = $_POST['aficion'];
    }
    if (isset($_POST['menu'])){
        $menu_fav = $_POST['menu'];
    }
    $aficion= implode(",", $afic);
    $menu = implode(",", $menu_fav);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Vista datos</title>
</head>
<body>
    <?=
        "<table class='table table-striped-columns border border-secondary'>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>URL</th>
                <th>Sexo</th>
                <th>Integrantes Familiares</th>
                <th>Aficiones</th>
                <th>Menus</th>

            </tr>
            <tr>
                <td>{$_POST['nombre']}</td>
                <td>{$_POST['apellido']}</td>
                <td>{$_POST['correo']}</td>
                <td>{$_POST['url']}</td>
                <td>{$_POST['sexo']}</td>
                <td>{$_POST['family']}</td>
                <td>{$aficion}</td>
                <td>{$menu}</td>
            </tr>
        </table>"
    ?>
</body>
</html>