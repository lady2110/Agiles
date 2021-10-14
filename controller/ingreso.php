<?php

include '../conexion.php';

$conexion = new Conexion();
$db = $conexion->getConexion();

$cedula = $_POST['cedula'];
$correo = $_POST['correo'];



$query1 = mysqli_query($db, "SELECT * FROM empleado WHERE cedula = '$cedula' and correo = '$correo' ");
$nr1 = mysqli_num_rows($query1);

echo $nr1;

if ($nr1 == 1) {
	header("location: ../cuenta.php");
} else if ($nr1 == 0) {
	$_SESSION['message'] = 'Contraseña o Email Incorrecto, No existe!!';
	$_SESSION['message_type'] = 'warninig';
	header("location: ../seccion.php");
}
