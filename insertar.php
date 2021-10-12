<style>
	@import url('https://fonts.googleapis.com/css2?family=Gluten:wght@300&display=swap');

	p,
	a,
	h1 {
		font-family: 'Gluten', cursive;
		text-align: center;
	}
</style>
<?php
include 'conexion.php';

$conexion = new Conexion();
$db = $conexion->getConexion();


if (isset($_POST['guardar'])) {
	$cedula = $_POST['cedula'];
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];
	$cargo = $_POST['cargo'];
	$fecha = $_POST['fecha'];
	$salario = $_POST['salario'];
	$correo = $_POST['correo'];

	$sqlquery = "INSERT INTO empleado (cedula,nombre,telefono,direccion,cargo,fecha,salario,correo) VALUES('$cedula', '$nombre', '$telefono', '$direccion', '$cargo', '$fecha', '$salario', '$correo')";
	$resultado = mysqli_query($db, $sqlquery);
	if (!$resultado) { ?>
		<div style="height:700px;background-image:url('images/pie.png')">
			<div class="card" style="width:500px; margin-left:30%">
				<div class="card-body">
					<h1 class="card-title">Error!</h1>
					<p class="card-text" style="font-size: 30px;">La cedula que intenta ingresar ya existe</p>
				</div>
				<img src="images/pregunta.png" class="card-img-bottom" alt="Card image" style="width:100%">
				<a href="seccion.php" class="btn btn-primary">Regresar</a>
			</div>
		</div>
	<?php } else { ?>
		<div style="height:700px;background-image:url('images/pie.png')">
			<div class="card" style="width:500px; margin-left:30%">
				<div class="card-body">
					<h1 class="card-title">Muy bien!</h1>
					<p class="card-text">Registro Exitoso</p>
				</div>
				<img src="images/muybien.png" class="card-img-bottom" alt="Card image" style="width:100%">
				<a href="seccion.php" class="btn btn-primary">Regresar</a>
			</div>
		</div>
<?php }
}
