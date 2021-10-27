<link rel="stylesheet" href="styles/bootstrap-reboot.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
	@import url('https://fonts.googleapis.com/css2?family=Gluten:wght@300&display=swap');

	a,
	h1,
	h2,
	h4,
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


if (isset($_POST['consult'])) {
	$cedula = $_POST['cedula'];
	$query2 = mysqli_query($db, " SELECT * FROM empleado WHERE cedula = '$cedula'");
	$nr2 = mysqli_num_rows($query2);
	if ($nr2 == 1) {
		while ($row = mysqli_fetch_array($query2)) { ?>
			<div id="banner">
				<img src="../images/Pasteleria.png" style="width:100%; height: 250px">
			</div>
			<div style="background-color: #EC407A;">
				<h1 style="color: white;text-align:center">Datos Empleado</h1>
			</div>
			<div style="background-image:url('../images/pie.png');height:400px">
				<div style="float:left;margin-left:10%;">
					<img src="../images/leer.png" style="height:90%;">
				</div>
				<div style=" height:400px;float:left;margin-left:50px">
					<div>
						<table>
							<tr>
								<td>
									<h4 style="color:#EC407A;">NOMBRE</h4>
								</td>
								<td>
									<h4><?php echo $row['nombre']; ?></h4>
								</td>
							</tr>
							<tr>
								<td>
									<h4 style="color:#EC407A;">CEDULA</h4>
								</td>
								<td>
									<h4><?php echo $cedula ?></h4>
								</td>
							</tr>
							<tr>
								<td>
									<h4 style="color:#EC407A;">TELÉFONO</h4>
								</td>
								<td>
									<h4><?php echo $row['telefono']; ?></h4>
								</td>
							</tr>
							<tr>
								<td>
									<h4 style="color:#EC407A;">DIRECCIÓN</h4>
								</td>
								<td>
									<h4><?php echo $row['direccion']; ?></h4>
								</td>
							</tr>
							<tr>
								<td>
									<h4 style="color:#EC407A;">CARGO</h4>
								</td>
								<td>
									<h4><?php echo $row['cargo']; ?></h4>
								</td>
							</tr>
							<tr>
								<td>
									<h4 style="color:#EC407A;">FECHA DE INGRESO</h4>
								</td>
								<td>
									<h4><?php echo $row['fecha']; ?></h4>
								</td>
							</tr>
							<tr>
								<td>
									<h4 style="color:#EC407A;">SALARIO</h4>
								</td>
								<td>
									<h4><?php echo $row['salario']; ?>$</h4>
								</td>
							</tr>
							<tr>
								<td>
									<h4 style="color:#EC407A;">CORREO</h4>
								</td>
								<td>
									<h4><?php echo $row['correo']; ?></h4>
								</td>
							</tr>
						</table>
					</div>
					<a href="edit.php?cedula=<?php echo $row['cedula'] ?>"><img src="../images/editar.png" title="Editar" style="width: 50px;height:50px;margin-left:45%"></a>
					<a href="delete.php?cedula=<?php echo $row['cedula'] ?> "><img src="../images/basura.png" title="Eliminar" style="width: 50px;height:50px;"></a>
					<a href="../cargoa.php" class="btn btn-primary"><img src="../images/flecha-izquierda.png" title="Regresar" style="width: 50px;height:50px;"></a>
				</div>

			</div>
		<?php }
	} else { ?>
		<div style="height:750px;background-image:url('../images/pie.png');">
			<div style="width:500px; margin-left:30%;">
				<div>
					<p class="card-text" style="font-size: 30px; text-align: center;">ERROR!</p>
					<p class="card-text" style="font-size: 30px; text-align: center;">La cedula que intenta consultar no existe</p>
				</div>
				<div>
					<img src="../images/choque.png" class="card-img-bottom" alt="Card image" style="width:50%;margin-left:25%">
				</div>
				<div>
					<a href="../cuenta.php" class="btn btn-primary" style="margin-left: 41%;margin-top:2%">Regresar</a>
				</div>
			</div>
		</div>
<?php }
} ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>