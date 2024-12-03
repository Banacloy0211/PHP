<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Libro</title>
</head>
<body>
    <h1>Agregar libros</h1>
    <form action="index.php?action=crear" method="POST">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" required>
        <br>
        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" required></textarea>
        <br>
        <label for="creacion">Creacion:</label>
        <input type="date" name="creacion" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>