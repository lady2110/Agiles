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

$producto->idProducto = isset($_GET['idProducto']) ? $_GET['idProducto'] : die();
 

if ($producto->deletePro()) { // return true
    echo 'Producto eliminado correctamente...';
} else { // return false
    echo 'Producto NO se eliminado ...';
}

?>