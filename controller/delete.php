<?php
include '../conexion.php';

$conexion = new Conexion();
$db = $conexion->getConexion();
if (isset($_GET['cedula'])) {
	$cedula = $_GET['cedula'];
	$query3 = mysqli_query($db, " DELETE FROM empleado WHERE cedula = '$cedula'");
	header("location: ../cuenta.php");
}
