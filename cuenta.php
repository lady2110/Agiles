<style>
	@import url('https://fonts.googleapis.com/css2?family=Gluten:wght@300&display=swap');

	a,
	h1,
	h2,
	h3,
	h4,
	select,
	label,
	input {
		font-family: 'Gluten', cursive;
	}
</style>
<?php
include 'conexion.php';
include 'cabecera/cabecera.php';
?>
<div style="background-color: #EC407A;">
	<h1 style="color: white;text-align:center">Bienvenido</h1>
</div>
<div style="border-style: double;border-color:red;">
	<div style="height:270px">
		<div style="height:270px;width:50%;float:left">
			<div>
				<h4 style="text-align: center;">Para registrar, consultar, actualizar o eliminar un empleado o un producto debes ser Administrador, ingresa tu cedula y selecciona tu cargo</h4>
			</div>
			<form action="administrador.php" method="POST">
				<div style="height:50px;">
					<div style="height:50px;">
						<div style="height:45px;float:left; width:10%;margin-left:20px">
							<label for="text">Cedula:</label>
						</div>
						<div style="height:45px;float:left;width:70%"">
						<input type=" text" class="form-control" name="cedula" style="width: 90%;" autocomplete="off" required>
						</div>
					</div>
					<div style="height:45px;float:left; width:10%;margin-left:20px">
						<label for="text">Cargo:</label>
					</div>
					<div style="height:45px;float:left;width:70%"">
										<select style=" width: 90%; height:40px;" class="form-control" name="cargo" required>
						<option value="">Selecciona...</option>
						<option value="administrador">Administrador</option>
						<option value="empleado">Empleado</option>
						</select>
					</div>
				</div>
				<div style="height:50px;margin-top:50px;width:100px;margin-left:20px">
					<button type="submit" class="btn btn-primary" style="font-family:'Gluten', cursive;">Ingresar</button>
				</div>
			</form>
		</div>
		<div style="height:270px;width:50%;float:left">
			<img src="images/b2.png" width="100%" height="100%">
		</div>
	</div>
	<div style="border-style: double;border-color:chartreuse; height:305px">
		<div id="carrusel" style=" width:100%;">
			<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active" data-interval="2000">
						<img src="images/carrusel4.jpg " class="d-block w-100" height="300px">
					</div>
					<div class="carousel-item" data-interval="2000">
						<img src="images//carrusel2.png" class="d-block w-100" height="300px">
					</div>
					<div class="carousel-item" data-interval="2000">
						<img src="images/carrusel3.png" class="d-block w-100" height="300px">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<div style="border-style: double;border-color:blueviolet; height:330px">

	</div>
</div>
<div>
	<?php
	include 'cabecera/pie.php';
	?>
</div>