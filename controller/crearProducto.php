<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once '../conexion.php';
include_once '../producto.php';

$conexion = new Conexion();
$db = $conexion->getConexion();

$producto = new Producto($db);

$producto->nomProducto = $_GET['nombreProducto'];
$producto->precio = $_GET['precio'];
$producto->tipoProducto = $_GET['tipoProducto'];


if ($producto->crearPro()) { // return true
    echo 'Producto creado correctamente...';
} else { // return false
    echo 'Producto NO se creó ...';
}

?>