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
				<form action="controller/ingreso.php" method="POST">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Correo</label>
						<input type="email" class="form-control" name="correo" aria-describedby="emailHelp" style=" width:80%" autocomplete="off">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Cedula</label>
						<input type="password" class="form-control" name="cedula" style=" width:80%">
					</div>
					<?php
					//ALERTA PARA INGRESO
					if (isset($_SESSION['message'])) { ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert" ; style="width: 80%;">
							<?= $_SESSION['message'] ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php session_unset();
					} ?>
					<button type="submit" class="btn btn-primary" style="font-family:'Gluten', cursive;" name="entrar">Entrar</button>
				</form>
			</div>

		</div>
		<div style="float:left; width:45%;height:350px; margin-top:10px;">
			<img src="images/p1.png" style="width:100%; height:100%">
		</div>
	</div>
</div>
<div>
	<?php
	include 'cabecera/pie.php';
	?>
</div>