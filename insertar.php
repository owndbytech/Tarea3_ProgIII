<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    // Consulta para insertar en SQL Server
    $sql = "INSERT INTO Usuarios (nombre, correo) VALUES (?, ?)";
    $params = array($nombre, $correo);

    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    } else {
        echo "¡Usuario guardado con éxito!";
        echo "<br><a href='index.php'>Volver al formulario</a>";
    }
}
?>