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
$producto->getProXId();
if ($producto->nomProducto != null) {
    echo "El producto es que buscas es:";
    
    // create array
    $producto_arr = array(
        "idProducto" => $producto->idProducto,
        "nombreProducto" => $producto->nomProducto,
        "precio" => $producto->precio,
        "tipoProducto" => $producto->tipoProducto
       

    );

    http_response_code(200);
    echo json_encode($producto_arr);
} else {
    http_response_code(404);
    echo json_encode("Producto NO encontrado.");
}
?>