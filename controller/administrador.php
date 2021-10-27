<?php
include '../conexion.php';
$conexion = new Conexion();
$db = $conexion->getConexion();

$cedula = $_POST['cedula'];
$cargo = $_POST['cargo'];

$query1 = mysqli_query($db, "SELECT * FROM empleado WHERE cedula = '$cedula' and cargo = '$cargo' ");

$query2 = mysqli_query($db, " SELECT nombre FROM empleado WHERE cedula = '$cedula' and cargo = '$cargo'");

$query3 = mysqli_query($db, " SELECT cargo FROM empleado WHERE cedula = '$cedula'");

$nr1 = mysqli_num_rows($query1);
$nr2 = mysqli_num_rows($query2);
$nr3 = mysqli_num_rows($query3);

while ($row = mysqli_fetch_array($query3)) {
	if ($nr1 == 1 && $row['cargo'] == 'administrador') {
		while ($row = mysqli_fetch_array($query2)) {
			header("location:../cargoa.php");
		}
	} else if ($nr1 == 1 && $row['cargo'] == 'empleado') {
		header("location: ../nopermisos.php");
	}
}

if ($nr1 == 0) {
	header("location: ../error.php");
}
