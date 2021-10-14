<style>
	@import url('https://fonts.googleapis.com/css2?family=Gluten:wght@300&display=swap');

	a,
	h1,
	h2,
	h3,
	h6,
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
<div style="border-style: double;border-color:red;">
	<div style="border-style: double;border-color:yellow;height:250px">
		<div style="border-style: double;border-color:green;height:250px;width:50%;float:left">
			<div>
				<h6 style="text-align: center;">Para registrar, consultar, actualizar o eliminar un empleado debes ser Administrador, ingresa tu cedula y selecciona tu cargo</h6>
			</div>
			<form action="controller/administrador.php" method="POST">
				<div style="height:50px;">
					<div style="height:50px;">
						<div style="height:45px;float:left; width:30%;">
							<label for="text">Cedula:</label>
						</div>
						<div style="height:45px;float:left;width:70%"">
						<input type=" password" class="form-control" name="cedula">
						</div>
					</div>
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
				<button type="submit" class="btn btn-primary" style="font-family:'Gluten', cursive;margin-top:30px" name="consultar">Ingresar</button>
			</form>
		</div>
		<div style="border-style: double;border-color:green;height:250px;width:50%;float:left"></div>
	</div>
	<div style="border-style: double;border-color:chartreuse; height:400px"></div>
</div>
<div>
	<?php
	include 'cabecera/pie.php';
	?>
</div>