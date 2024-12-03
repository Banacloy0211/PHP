<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando libro</title>
</head>
<body>
    <h1>Editar Libro</h1>
    <form method="POST" action="index.php?editar&id=<?= $libro['id']?>">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" value="<?= $libro['titulo']?>" required>
        <br>
        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" required><?= $libro['descripcion']?></textarea>
        <br>
        <label for="creacion">Creacion:</label>
        <input type="date" name="creacion" value="<?= $libro['creacion']?>" required>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>