<?php
include 'conexion.php';
$nombre=$_POST['nombre'];
$categoria=$_POST['categoria'];
$precio=$_POST['precio'];
$mysql = "INSERT INTO producto (N_PRODUCTO, ID_CATPRODUCTO, PRECIO_UNI) VALUES ('$nombre', '$categoria', '$precio')";
mysqli_query($conexion,$mysql) or die (mysqli_connect_error());
mysqli_close($conexion);
?>