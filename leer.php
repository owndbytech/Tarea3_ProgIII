<?php
include 'conexion.php';
$sql = "SELECT id, nombre, correo FROM Usuarios";
$stmt = sqlsrv_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h2>Usuarios Registrados</h2>
    <table border="1">
        <tr>
            <th>ID</th><th>Nombre</th><th>Correo</th><th>Acciones</th>
        </tr>
        <?php while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['correo']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $row['id']; ?>">Editar</a> | 
                <a href="eliminar.php?id=<?php echo $row['id']; ?>" onclick="return confirm('¿Seguro?')">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br><a href="index.php">Agregar nuevo usuario</a>
</body>
</html>