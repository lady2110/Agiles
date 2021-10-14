<link rel="stylesheet" href="styles/bootstrap-reboot.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
include '../conexion.php';

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
		<div style="height:600px;background-image:url('../images/pie.png')">
			<div style="width:500px; margin-left:30%">
				<div>
					<h1 class="card-title" style=" text-align: center;">Error!</h1>
					<p class="card-text" style="font-size: 30px; text-align: center;">ERROR!</p>
					<p class="card-text" style="font-size: 30px; text-align: center;">La cedula que intenta ingresar ya existe</p>
				</div>
				<img src="../images/choque.png" class="card-img-bottom" alt="Card image" style="width:50%">
				<a href="../cuenta.php" class="btn btn-primary">Regresar</a>
			</div>
		</div>
	<?php } else { ?>
		<div style="height:600px;background-image:url('../images/pie.png')">
			<div style="width:500px; margin-left:30%">
				<div>
					<h1 class="card-title" style=" text-align: center;">Error!</h1>
					<p class="card-text" style="font-size: 30px; text-align: center;">Muy bien!</p>
					<p class="card-text" style="font-size: 30px; text-align: center;">Registro correcto</p>
				</div>
				<img src="../images/muybien.png" class="card-img-bottom" alt="Card image" style="width:50%">
				<a href="../cuenta.php" class="btn btn-primary">Regresar</a>
			</div>
		</div>
<?php }
}
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>