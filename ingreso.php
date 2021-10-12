<?php
include 'conexion.php';

$conexion = new Conexion();
$db = $conexion->getConexion();

$cedula = $_POST['cedula'];
$correo = $_POST['correo'];

$query1 = mysqli_query($db, "SELECT * FROM empleado WHERE cedula = '$cedula'");
$query2 = mysqli_query($db, "SELECT * FROM empleado WHERE correo = '$correo'");
$nr1 = mysqli_num_rows($query1);
$nr2 = mysqli_num_rows($query2);

if ($nr1 == 1 && $nr2 == 1) {
	echo 'Bienvenido';
} else if ($nr1 != null || $nr2 != null) {
	$_SESSION['message'] = 'Contraseña o Email Incorrecto';
	$_SESSION['message_type'] = 'warninig';
	header("location: seccion.php");
} else {
	$_SESSION['message'] = 'Empleado no Existe';
	$_SESSION['message_type'] = 'success';
	header("location: seccion.php");
}
