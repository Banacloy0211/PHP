
    <h1>Listado de libros</h1>
    <a href="index.php?action=create">Agregar libro</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Creacion</th>
        </tr>
        <?php foreach($libros as $libro): ?>
            <tr>
                <td><?= $libro['id'] ?></td>
                <td><?= $libro['titulo'] ?></td>
                <td><?= $libro['descripcion'] ?></td>
                <td><?= $libro['creacion'] ?></td>
                <td><a href="index.php?action=edit&id=<?= $libro['id']?>">Editar</a>
                <a href="index.php?action=delete&id=<?= $libro['id']?>" onclick="return confirm('¿Estas seguro?')">Eliminar</a></td>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
