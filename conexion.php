<?php

$serverName = "TAVAREZ"; 

$connectionOptions = array(
    "Database" => "ProgramacionIII_Tarea3"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn) {
    echo "Conexión establecida satisfactoriamente.";
} else {
    echo "Conexión no pudo establecerse.<br />";
    die(print_r(sqlsrv_errors(), true));
}
?>