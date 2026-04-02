<?php
include 'conexion.php';

// Consulta para obtener todos los usuarios registrados en SQL Server
$sql = "SELECT id, nombre, correo FROM Usuarios";
$stmt = sqlsrv_query($conn, $sql);

if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios - Tarea 3</title>
    <style>
        table { border-collapse: collapse; width: 50%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h2>Usuarios Registrados</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
        <?php while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['correo']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $row['id']; ?>">Editar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="index.php">Agregar nuevo usuario</a>
</body>
</html>