<?php
include 'conexion.php';
$id = $_GET['id'];
$sql = "SELECT * FROM Usuarios WHERE id = ?";
$stmt = sqlsrv_query($conn, $sql, array($id));
$usuario = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $sql_update = "UPDATE Usuarios SET nombre = ?, correo = ? WHERE id = ?";
    $params = array($nombre, $correo, $id);
    $stmt_update = sqlsrv_query($conn, $sql_update, $params);
    if ($stmt_update) {
        header("Location: leer.php");
    } else {
        die(print_r(sqlsrv_errors(), true));
    }
}
?>
<form method="POST">
    <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>" required>
    <input type="email" name="correo" value="<?php echo $usuario['correo']; ?>" required>
    <button type="submit">Actualizar</button>
</form>