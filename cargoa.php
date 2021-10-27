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
		text-align: center;

	}

	.titulos {
		background-color: #EC407A;
		color: white;
	}
</style>
<div style="background-color: #EC407A; height:80px;">
	<img src="images/hola.png" style="width: 80px; height:80px;float:left">
	<a href="cuenta.php" class="btn btn-light">Regresar</a>
	<h1 style="color: white;text-align:center">Bienvenido</h1>

</div>
<div style="width: 100%; height:300px">
	<img src="images/b1.png" style="width: 100%; height:300px">
</div>
}
<div style="background-color: #FCE4EC;">
	<div style="height:50px;background-color: #EC407A;">
		<h3 style="text-align: center;color:white">¿Qué deseas hacer?</h3>
	</div>
	<div style="height:305px">
		<div style="height:300px;float:left;width:32.5%;margin-left:1.5%">
			<div style="height:40px">
				<h3>Productos</h3>
			</div>
			<div style="height:207;">
				<img src="images/producto.png" style="width: 40%;margin-left:30%">
			</div>
			<div style="height:50px">
				<a href="crudProducto.php" class="btn btn-primary" style="margin-left:35%">Agregar</a>
			</div>
		</div>
		<div style="height:300px;float:left;width:32.5%;">
			<div style="height:40px">
				<h3>Registrar Empleado</h3>
			</div>
			<div style="height:207;">
				<img src="images/cocinera.png" style="width: 40%;margin-left:25%">
			</div>
			<div style="height:50px">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:35%">
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
											<input type=" text" class="form-control" name="nombre" autocomplete="off" required>
										</div>
									</div>

									<div style="height:50px;">
										<div style="height:45px;float:left; width:30%;">
											<label for="text">Cedula:</label>
										</div>
										<div style="height:45px;float:left;width:70%"">
											<input type=" text" class="form-control" name="cedula" autocomplete="off" required>
										</div>
									</div>

									<div style="height:50px;">
										<div style="height:45px;float:left; width:30%;">
											<label for="text">Teléfono:</label>
										</div>
										<div style="height:45px;float:left;width:70%"" >
											<input type=" text" class="form-control" name="telefono" autocomplete="off" required>
										</div>
									</div>

									<div style="height:50px;">
										<div style="height:45px;float:left; width:30%;">
											<label for="text">Dirección:</label>
										</div>
										<div style="height:45px;float:left;width:70%"">
											<input type=" text" class="form-control" name="direccion" autocomplete="off" required>
										</div>
									</div>

									<div style="height:50px;">
										<div style="height:45px;float:left; width:30%;">
											<label for="text">Fecha Ingreso:</label>
										</div>
										<div style="margin-top: 5px;">
											<input type="date" name="fecha" required>
										</div>
									</div>

									<div style="height:50px;">
										<div style="height:45px;float:left; width:30%;">
											<label for="text">Cargo:</label>
										</div>
										<div style="height:45px;float:left;width:70%"">
											<select style=" width: 100%; height:40px;" class="form-control" name="cargo" required>
											<option value="">Selecciona...</option>
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
											<input type=" email" class="form-control" name="correo" aria-describedby="emailHelp" autocomplete="off" required>

										</div>
									</div>

									<div style="height:50px;">
										<div style="height:45px;float:left; width:30%;">
											<label for="text">Salario:</label>
										</div>
										<div style="height:45px;float:left;width:70%"">
											<input type=" text" class="form-control" name="salario" autocomplete="off" required>
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
		</div>
		<div style="height:300px;float:left;width:32.5%;">
			<div style="height:40px">
				<h3>Consultar Empleado</h3>
			</div>
			<div style="height:207px;">
				<img src="images/cocinero.png" style="width: 40%;margin-left:30%">
			</div>
			<div style="height:50px">
				<form action="./controller/consultar.php" method="POST">
					<div style="height:45px;float:left; width:10%;">
						<label for="text">Cedula:</label>
					</div>
					<div style="height:45px;float:left;width:50%"">
							<input type=" text" class="form-control" name="cedula" autocomplete="off" style="margin-left: 20px;" required>
					</div>
					<div div style="height:45px;float:left; width:10%;">
						<button type="submit" class="btn btn-primary" name="consult" style="margin-left: 30px;">Consultar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>