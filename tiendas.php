<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "negocio";

$conexion = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

if ($conexion) {
    $consulta = "SELECT nombre, imagen FROM tiendas";
    $resultado = mysqli_query($conexion, $consulta);

    $tiendas = array();

    while ($fila = mysqli_fetch_assoc($resultado)) {
        $tiendas[] = $fila;
    } 

    echo json_encode($tiendas);

    mysqli_close($conexion);
} else {
    echo "Error de conexión a la base de datos";
}

?>
