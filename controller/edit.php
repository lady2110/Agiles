<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
	@import url('https://fonts.googleapis.com/css2?family=Gluten:wght@300&display=swap');

	a,
	h1,
	h2,
	h3,
	h4,
	select,
	label,
	input,
	button,
	p {
		font-family: 'Gluten', cursive;

	}
</style>
<?php
include '../conexion.php';

$conexion = new Conexion();
$db = $conexion->getConexion();

if (isset($_GET['cedula'])) {
	$cedula = $_GET['cedula'];
	$query2 = mysqli_query($db, " SELECT * FROM empleado WHERE cedula = '$cedula'");
	if (mysqli_num_rows($query2) == 1) {
		$row = mysqli_fetch_array($query2);
	}
}
if (isset($_POST['update'])) {
	$cedula = $_GET['cedula'];
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];
	$cargo = $_POST['cargo'];
	$fecha = $_POST['fecha'];
	$salario = $_POST['salario'];
	$correo = $_POST['correo'];

	$query = mysqli_query($db, " UPDATE empleado SET nombre = '$nombre', telefono = '$telefono', direccion = '$direccion', cargo = '$cargo', fecha = '$fecha', salario = '$salario',correo='$correo' WHERE cedula = '$cedula'");
	header("location: ../cuenta.php");
}
?>
<div id="banner">
	<img src="../images/Pasteleria.png" style="width:100%; height: 250px">
</div>
<div style="background-color: #EC407A;">
	<h1 style="color: white;text-align:center">Editar Empleado</h1>
</div>
<div class="card card-body" style="height:420px; width:100%;background-image:url('../images/pie.png')">
	<form action="edit.php?cedula=<?php echo $_GET['cedula'] ?>" method="post">
		<div style="float:left;width:30%;margin-left:20px">
			<p>Nombre <input type="text" name="nombre" value="<?php echo $row['nombre']; ?> " class="form-control" autocomplete="off"></p>

			<p>Tel{efono <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>" class="form-control" autocomplete="off"></p>

			<p>Dirección <input type="text" name="direccion" value="<?php echo $row['direccion']; ?>" class="form-control" autocomplete="off"></p>

			<p>Cargo nuevo <select style=" width: 100%; height:40px;" class="form-control" name="cargo">
					<option selected><?php echo $row['cargo']; ?></option>
					<option value="administrador">Administrador</option>
					<option value="empleado">Empleado</option>
				</select></p>
		</div>

		<div style="float:left;width:30%;margin-left:20px">

			<p>fecha Ingreso <input type="date" name="fecha" value="<?php echo $row['fecha']; ?>" class="form-control"></p>


			<p>salario <input type="text" name="salario" value="<?php echo $row['salario']; ?>" class="form-control" autocomplete="off"></p>

			<p>correo <input type="text" name="correo" value="<?php echo $row['correo']; ?>" class="form-control" autocomplete="off"></p>

			<button class="btn btn-primary" name="update" style="margin-top: 25px;">
				editar
			</button>
			<a href="../cuenta.php" class="btn btn-primary" style="margin-top: 25px;">Regresar</a>
		</div>

		<div style="float:left;width:30%;margin-left:20px">
			<img src="../images/lapiz.png" style="width: 100%;height:95%">
		</div>
	</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEtd1eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>