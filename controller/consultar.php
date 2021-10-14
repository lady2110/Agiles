<style>
	@import url('https://fonts.googleapis.com/css2?family=Gluten:wght@300&display=swap');

	h1,
	h3,
	a {
		text-align: center;
		font-family: 'Gluten', cursive;
	}
</style>
<?php
include '../conexion.php';

$conexion = new Conexion();
$db = $conexion->getConexion();


if (isset($_POST['consult'])) {
	$cedula = $_POST['cedula'];
	$query2 = mysqli_query($db, " SELECT nombre,telefono, direccion,cargo,fecha,salario,correo FROM empleado WHERE cedula = '$cedula'");
	$nr2 = mysqli_num_rows($query2);
	if ($nr2 == 1) {
		while ($row = mysqli_fetch_array($query2)) { ?>
			<?php echo $cedula ?>
			<div style="background-image:url('../images/pie.png');">
				<img src="../images/leer.png" style="margin-left: 38%;width:25%;height:50%">
				<div style=" height:400px;margin-left:25%; margin-right:25%;">
					<div>
						<h1 style="color: white;">DATOS DEL EMPLEADO</h1>
					</div>
					<div style="float:left;width:49%;height:320px">
						<h3 style="color:#EC407A;">NOMBRE</h3>
						<h3 style="color:#EC407A;">CEDULA</h3>
						<h3 style="color:#EC407A;">TELÉFONO</h3>
						<h3 style="color:#EC407A;">DIRECCIÓN</h3>
						<h3 style="color:#EC407A;">CARGO</h3>
						<h3 style="color:#EC407A;">FECHA DE INGRESO</h3>
						<h3 style="color:#EC407A;">SALARIO</h3>
						<h3 style="color:#EC407A;">CORREO</h3>
					</div>
					<div style="float:left;width:49%;height:320px">
						<h3><?php echo $row['nombre']; ?></h3>
						<h3><?php echo $cedula ?></h3>
						<h3><?php echo $row['telefono']; ?></h3>
						<h3><?php echo $row['direccion']; ?></h3>
						<h3><?php echo $row['cargo']; ?></h3>
						<h3><?php echo $row['fecha']; ?></h3>
						<h3><?php echo $row['salario']; ?>$</h3>
						<h3><?php echo $row['correo']; ?></h3>
					</div>
					<a href="../cuenta.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
<?php }
	} else {
		echo $cedula;
		echo 'La cedula ingresda no esta registrada';
	}
} else if (isset($_POST['delete'])) {
	$cedula = $_POST['cedula'];
	$query3 = mysqli_query($db, " DELETE FROM empleado WHERE cedula = '$cedula'");
	echo 'usuario eliminado';
}
