<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "tienda";

$conexion = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);
$nombre=$_POST['nombre'];

$precio=$_POST['precio'];
$mysql = "INSERT INTO producto (N_PRODUCTO, PRECIO_UNI) VALUES ('$nombre',  '$precio')";
mysqli_query($conexion,$mysql) or die (mysqli_connect_error());
mysqli_close($conexion);
?>
