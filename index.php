<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Agregar Usuario</title>
</head>
<body>
    <h2>Registro de Usuarios</h2>
    <form action="insertar.php" method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>
        <label>Correo Electrónico:</label><br>
        <input type="email" name="correo" required><br><br>
        <button type="submit">Guardar Usuario</button>
    </form>
</body>
</html>