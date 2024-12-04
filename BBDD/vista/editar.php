
    <h1>Editar Libro</h1>
    <form method="POST" action="index.php?action=edit&id=<?= $libro['id']?>">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" value="<?= $libro['titulo']?>" required>
        <br>
        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion" value="<?= $libro['descripcion']?>" required>
       
        <br>
        <button type="submit">Actualizar</button>
    </form>
