<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM Usuarios WHERE id = ?";
    $params = array($id);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt) {
        header("Location: leer.php");
    } else {
        die(print_r(sqlsrv_errors(), true));
    }
}
?>