<?php
// Conexión a la base de datos
$server = "localhost";
$username = "root";
$password = "";
$database = "tienda";

$conexion = mysqli_connect($server, $username, $password, $database);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>