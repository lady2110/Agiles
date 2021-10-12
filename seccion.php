<?php
include 'conexion.php';
?><?php
	include 'cabecera/cabecera.php';
	?>
<title>Inicia sección</title>

<style>
	@import url('https://fonts.googleapis.com/css2?family=Gluten:wght@300&display=swap');

	a,
	h1,
	h2,
	h3,
	select,
	label,
	input {
		font-family: 'Gluten', cursive;
	}

	.titulos {
		background-color: #EC407A;
		color: white;
	}
</style>
<div id="contenedor" style="height:400px">
	<div style="height:490px;margin-top:10px;">
		<div style="margin-top:10px; float:left; width:45%; margin-left:5%">
			<h1 style="color:#EC407A ;">Inicia Sección</h1>
			<div>
				<form action="ingreso.php" method="POST">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Correo</label>
						<input type="email" class="form-control" name="correo" aria-describedby="emailHelp" style=" width:80%">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Cedula</label>
						<input type="password" class="form-control" name="cedula" style=" width:80%">
					</div>
					<?php
					if (isset($_SESSION['message'])) { ?>
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							<?= $_SESSION['message'] ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php session_unset();
					} ?>
					<?php
					if (isset($_SESSION['message'])) { ?>
						<div class="alert alert-<?php $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
							<?= $_SESSION['message'] ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php session_unset();
					} ?>
					<button type="submit" class="btn btn-primary" style="font-family:'Gluten', cursive;" name="entrar">Entrar</button>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
						Registrar
					</button>
				</form>
			</div>
			<div>
				<div class="modal" id="myModal">
					<div class="modal-dialog">
						<div class="modal-content">

							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Regitrar Empleado</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<!-- Modal body -->
							<div class="modal-body">
								<form action="insertar.php" method="POST">
									<div style=height:50px;">
										<div style="height:45px;float:left; width:30%;">
											<label for="text">Nombre:</label>
										</div>
										<div style="height:45px;float:left;width:70%"">
										<input type=" text" class="form-control" name="nombre">
										</div>
									</div>

									<div style="height:50px;">
										<div style="height:45px;float:left; width:30%;">
											<label for="text">Cedula:</label>
										</div>
										<div style="height:45px;float:left;width:70%"">
										<input type=" text" class="form-control" name="cedula">
										</div>
									</div>

									<div style="height:50px;">
										<div style="height:45px;float:left; width:30%;">
											<label for="text">Teléfono:</label>
										</div>
										<div style="height:45px;float:left;width:70%"">
										<input type=" text" class="form-control" name="telefono">
										</div>
									</div>

									<div style="height:50px;">
										<div style="height:45px;float:left; width:30%;">
											<label for="text">Dirección:</label>
										</div>
										<div style="height:45px;float:left;width:70%"">
										<input type=" text" class="form-control" name="direccion">
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
										<input type=" text" class="form-control" name="correo">
										</div>
									</div>

									<div style="height:50px;">
										<div style="height:45px;float:left; width:30%;">
											<label for="text">Salario:</label>
										</div>
										<div style="height:45px;float:left;width:70%"">
										<input type=" text" class="form-control" name="salario">
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
		<div style="border-style: double;border-color:red;float:left; width:45%;height:400px; margin-top:10px"></div>

	</div>

</div>
<div>
	<?php
	include 'cabecera/pie.php';
	?>
</div>