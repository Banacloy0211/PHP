<?php
require_once "config/conexion.php";

class libro{

    private $pdo;

    public function __construct(){
        $database = new conexion();
        $this -> pdo = $database -> conectar();
    }

    public function getAll(){
        try{
            $consulta = "SELECT * FROM libros";
            $registro = $this -> pdo ->prepare($consulta);
            $registro -> execute();
            return $registro-> fetchAll();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getById($id){
        try{
            $consulta = "SELECT * FROM libros Where id = :id";
            $registro = $this -> pdo ->prepare($consulta);
            $registro -> execute();
            return $registro-> fetch();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function delete($id){
        try{
            $borrado = $this -> pdo ->prepare("DELETE FROM libros WHERE id = :id");
            $borrado -> bindParam(':id', $id);
            return $borrado -> execute();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function edit($id, $titulo, $descripcion, $creacion){
        try{
            $editar = $this -> pdo -> prepare("update libros set titulo = :titulo, set descripcion = :descripcion, set creacion = :creacion where id = :id");
            $editar -> bindParam(':id', $id);
            $editar -> bindParam(':titulo', $titulo);
            $editar -> bindParam(':descripcion', $descripcion);
            $editar -> bindParam(':creacion', $creacion);
            $editar -> execute();
            return true;
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function save($titulo, $descripcion, $creacion){
        try{
            $registro = $this -> pdo -> prepare("INSERT INTO libros(titulo, descripcion, creacion) VALUES(:titulo, :descripcion, :creacion)");
            $registro -> bindParam(':descripcion', $descripcion);
            $registro -> bindParam(':titulo', $titulo);
            $registro -> bindParam(':creacion'  , $creacion);
            return $registro -> execute();
        }
        catch(PDOException $e){
            die ($e -> getMessage());
        }
    }

    public function update($id, $titulo, $descripcion, $creacion){
        $consulta = "UPDATE libros SET titulo = :titulo, descripcion = :descripcion, creacion = :creacion WHERE id = :id";
        $registro = $this -> pdo -> prepare($consulta);
        $registro -> bindParam(':id', $id);
        $registro -> bindParam(':titulo', $titulo);
        $registro -> bindParam(':descripcion', $descripcion);
        $registro -> bindParam(':creacion', $creacion);
        return $registro -> execute();
    }
}


?>