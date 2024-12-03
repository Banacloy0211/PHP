<?php
    require_once "controlador/libroControl.php";
    $libro = new libroControl();
    $action = $_GET['action'] ?? null;
    $id = $_GET['id'] ?? null;
    if ($action == 'crear'){
        $libro -> create($id);
    }
    else if ($action == 'editar'){
        $libro -> edit($id);
    }
    else if ($action == 'eliminar'){
        $libro -> delete($id);
    }
    else{
        $libro -> indice();
    }

?>