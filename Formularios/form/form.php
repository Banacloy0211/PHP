<?php
    if (isset($_POST['aficion'])){
        $afic = $_POST['aficion'];
    }
    if (isset($_POST['menu'])){
        $menu_fav = $_POST['menu'];
    }
    $aficion= implode(",", $afic);
    $menu = implode(",", $menu_fav);
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $url = $_POST['url'];
    $sexo = $_POST['sexo'];
    $family = $_POST['family'];
    include "header.php";
?>

<html>
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
                    <td>{$nombre}</td>
                    <td>{$apellido}</td>
                    <td>{$correo}</td>
                    <td>{$url}</td>
                    <td>{$sexo}</td>
                    <td>{$family}</td>
                    <td>{$aficion}</td>
                    <td>{$menu}</td>
                </tr>
            </table>"
        ?>
    </body>
</html>