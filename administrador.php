<link rel="stylesheet" href="styles/bootstrap-reboot.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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

	.titulos {
		background-color: #EC407A;
		color: white;
	}
</style>
<?php
include 'conexion.php';

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
		while ($row = mysqli_fetch_array($query2)) { ?>
			<div style="background-color: #EC407A;">
				<h1 style="color: white;text-align:center">Bienvenido</h1>
			</div>
			<div style="border-style:double;border-color:#EC407A; width:100%; height: 100px; background-image:url('images/pie.png');">
				<img src="images/hola.png" style="width: 100px; height:100px;float:left">
				<h3 style="margin-top: 50px;">Hola,<?php echo $row['nombre']; ?></h3>
			</div>
			<div style="width: 100%; height:300px">
				<img src="images/b1.png" style="width: 100%; height:300px">
			</div>
		<?php } ?>
		<div style="border-style: double;">
			<div style="border-style: double;border-color:green;width:30%;float:left; height:1000px">
				<div style="border-style: double; width:100%;height:170px">
					<h3 style="text-align: center;">Ingresar,modificar o eliminar un producto nuevo al carrito</h3>
					<a href="crudProducto.php" class="btn btn-primary" style="margin-left:35%">Agregar</a>
				</div>
			</div>
			<div style="border-style: double;border-color:red;width:70%; float:left; height:1000px">
				<h4 style="text-align: center;">¿Qué deseas hacer?</h4>
				<div style="border-style: double;border-color:orangered;height:800px">
					<div style="border-style: double;border-color:blue;height:100px">
						<div>
							<h2>REGISTRAR</h2>
						</div>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
							Registrar
						</button>
						<div class="modal" id="myModal">
							<div class="modal-dialog">
								<div class="modal-content">

									<!-- Modal Header -->
									<div class="modal-header">
										<h2 class="modal-title">Regitrar Empleado</h2>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body -->
									<div class="modal-body">
										<form action="./controller/insertar.php" method="POST">
											<div style=height:50px;">
												<div style="height:45px;float:left; width:30%;">
													<label for="text">Nombre:</label>
												</div>
												<div style="height:45px;float:left;width:70%"">
											<input type=" text" class="form-control" name="nombre" autocomplete="off">
												</div>
											</div>

											<div style="height:50px;">
												<div style="height:45px;float:left; width:30%;">
													<label for="text">Cedula:</label>
												</div>
												<div style="height:45px;float:left;width:70%"">
											<input type=" text" class="form-control" name="cedula" autocomplete="off">
												</div>
											</div>

											<div style="height:50px;">
												<div style="height:45px;float:left; width:30%;">
													<label for="text">Teléfono:</label>
												</div>
												<div style="height:45px;float:left;width:70%"" >
											<input type=" text" class="form-control" name="telefono" autocomplete="off">
												</div>
											</div>

											<div style="height:50px;">
												<div style="height:45px;float:left; width:30%;">
													<label for="text">Dirección:</label>
												</div>
												<div style="height:45px;float:left;width:70%"">
											<input type=" text" class="form-control" name="direccion" autocomplete="off">
												</div>
											</div>

											<div style="height:50px;">
												<div style="height:45px;float:left; width:30%;">
													<label for="text">Fecha Ingreso:</label>
												</div>
												<div style="margin-top: 5px;">
													<input type="date" name="fecha">
												</div>
											</div>

											<div style="height:50px;">
												<div style="height:45px;float:left; width:30%;">
													<label for="text">Cargo:</label>
												</div>
												<div style="height:45px;float:left;width:70%"">
											<select style=" width: 100%; height:40px;" class="form-control" name="cargo">
													<option selected>Selecciona...</option>
													<option value="administrador">Administrador</option>
													<option value="empleado">Empleado</option>
													</select>
												</div>
											</div>

											<div style="height:50px;">
												<div style="height:45px;float:left; width:30%;">
													<label for="email">Correo:</label>
												</div>
												<div style="height:45px;float:left;width:70%"">
											<input type=" text" class="form-control" name="correo" autocomplete="off">
												</div>
											</div>

											<div style="height:50px;">
												<div style="height:45px;float:left; width:30%;">
													<label for="text">Salario:</label>
												</div>
												<div style="height:45px;float:left;width:70%"">
											<input type=" text" class="form-control" name="salario" autocomplete="off">
												</div>
											</div>
											<div class=" modal-footer" style="font-family:'Gluten'">
												<button type="submit" class="btn btn-primary" name="guardar">Registrar</button>
												<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="border-style: double;border-color:green;height:150px;">
						<div>
							<h2>CONSULTAR,ACTUALIZAR Y ELIMINAR </h2>
						</div>
						<form action="./controller/consultar.php" method="POST">
							<div style="height:50px;">
								<div style="height:50px;">
									<div style="height:45px;float:left; width:10%;">
										<label for="text">Cedula:</label>
									</div>
									<div style="height:45px;float:left;width:50%"">
							<input type=" text" class="form-control" name="cedula" autocomplete="off">
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary" name="consult">Consultar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	<?php
	} else if ($nr1 == 1 && $row['cargo'] == 'empleado') { ?>
		<div style="height:600px;background-image:url('images/pie.png')">
			<div style="width:500px; margin-left:30%">
				<div>
					<h1 class="card-title" style=" text-align: center;">Error!</h1>
					<p class="card-text" style="font-size: 30px; text-align: center;">No tienes permisos</p>
				</div>
				<img src="images/alerta.png" class="card-img-bottom" alt="Card image" style="width:50%">
				<a href="cuenta.php" class="btn btn-primary">Regresar</a>
			</div>
		</div>
	<?php } else if ($nr1 == 0) { ?>
		<div style="height:600px;background-image:url('images/pie.png')">
			<div style="width:500px; margin-left:30%">
				<div>
					<h1 class="card-title" style=" text-align: center;">Error!</h1>
					<p class="card-text" style="font-size: 30px; text-align: center;">ERROR DE DATOS</p>
					<p class="card-text" style="font-size: 30px; text-align: center;">Cedula o cargo incorrectos</p>
				</div>
				<img src="images/detener.png" class="card-img-bottom" alt="Card image" style="width:50%">
				<a href="cuenta.php" class="btn btn-primary">Regresar</a>
			</div>
		</div>
<?php	}
}

?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>