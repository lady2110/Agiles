<?php
require 'controller/crudp.php';
?>
<style>
	.container,
	h1 {
		font-family: 'Gluten', cursive;
	}

	#button {
		font-size: 18px;
		margin-top: 15px;
		color: #EC407A;
	}

	.modal-title {
		font-family: 'Gluten', cursive;
		color: #FF5733;
	}
</style>
<?php
include 'cabecera/cabecera2.php';
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<title>Productos</title>
</head>

<body>
	<div style="background-color: #EC407A;">
		<h1 style="color: white;text-align:center">Nuestros Productos</h1>
	</div>
	<div class="container">
		<form action="" method="post" enctype="multipart/form-data">

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Productos</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="form-row">

								<input type="hidden" required name="idProducto" value="<?php echo $idProducto; ?>" placeholder="" id="idProducto" require="">

								<label for="">Nombre Producto:</label>
								<input type="text" class="form-control <?php echo (isset($error['nombreProducto'])) ? "is-invalid" : ""; ?>" name="nombreProducto" value="<?php echo $nombreProducto; ?>" placeholder="" id="nombreProducto" require="" autocomplete="off">
								<div class="invalid-feedback">
									<?php echo (isset($error['nombreProducto'])) ? $error['nombreProducto'] : ""; ?>
								</div>
								<br>

								<label for="">Precio:</label>
								<input type="number" class="form-control <?php echo (isset($error['precio'])) ? "is-invalid" : ""; ?>" name="precio" value="<?php echo $precio; ?>" placeholder="" id="precio" require="">
								<div class="invalid-feedback">
									<?php echo (isset($error['precio'])) ? $error['precio'] : ""; ?>
								</div>
								<br>

								<label for="">Tipo Producto:</label>
								<input type="text" class="form-control <?php echo (isset($error['tipoProducto'])) ? "is-invalid" : ""; ?>" name="tipoProducto" value="<?php echo $tipoProducto; ?>" placeholder="" id="tipoProducto" require="" autocomplete="off">
								<div class="invalid-feedback">
									<?php echo (isset($error['tipoProducto'])) ? $error['tipoProducto'] : ""; ?>
								</div>
								<br>

								<label for="">Imagen:</label>
								<?php if ($imagen != "") { ?>
									<br>
									<img class="img-thumbnail rounded mx-auto d-block" width="150px" src="images/<?php echo $imagen; ?>" />
									<br>
								<?php } ?>
								<input type="file" class="form-control" accept="image/*" name="imagen" value="<?php echo $imagen; ?>" placeholder="" id="imagen" require="">
								<br>


							</div>
						</div>
						<div class="modal-footer">
							<button value="btnAgregar" <?php echo $accionAgregar; ?> class="btn btn-success" type="submit" name="accion">Agregar</button>
							<button value="btnModificar" <?php echo $accionModificar; ?> class="btn btn-warning" type="submit" name="accion">Modificar</button>
							<button value="btnEliminar" onclick="return Confirmar('¿Estas seguro de Elimar el Producto?');" <?php echo $accionEliminar; ?> class="btn btn-danger" type="submit" name="accion">Eliminar</button>
							<button value="btnCancelar" <?php echo $accionCancelar; ?> class="btn btn-primary" type="submit" name="accion">Cancelar</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Button trigger modal -->

			<button type="button" id="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
				Agregar Producto +
			</button>

			<h4>Si deseas Modifcar un producto, le das clic en Seleccionar luego en Agregar Producto</h4>
			<a href="cuenta.php" class="btn btn-primary">Regresar</a>
		</form>

		<div class="row">
			<table class="table table-hover table-bordered">
				<thead class="table-warning">
					<tr>
						<th>Nombre Producto</th>
						<th>Precio</th>
						<th>Tipo</th>
						<th>Imagen</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<?php foreach ($listaProducto as $productos) { ?>
					<tr>
						<td><?php echo $productos['nombreProducto']; ?></td>
						<td><?php echo $productos['precio']; ?></td>
						<td><?php echo $productos['tipoProducto']; ?></td>
						<td><img class="img-thumbnail" width="100px" src="images/<?php echo $productos['imagen']; ?>" /></td>
						<td>
							<form action="" method="post">
								<input type="hidden" name="idProducto" value="<?php echo $productos['idProducto']; ?>">
								<a href="btnEliminar" onclick="return Confirmar('¿Estas seguro de Eliminar el Producto?');" type="submit" name="accion">
									<img src="images/bote-de-basura.png" width="30" height="30">
								</a>
								<button value="btnEliminar" onclick="return Confirmar('¿Estas seguro de Eliminar el Producto?');" type="submit" class="btn btn-info" name="accion">Eliminar</button>
								<input type="submit" value="Seleccionar" class="btn" style="background-color: #EC407A;" name="accion">
							</form>
						</td>
					</tr>
				<?php } ?>
			</table>
		</div>
		<!---Esta instruccion de Modal va hacer que el modal aparezca-->
		<?php if ($mostrarModal) { ?>
			<script>
				$('#exampleModal').modal('show');
			</script>
		<?php } ?>
		<script>
			function Confirmar(Mensaje) {
				return (confirm(Mensaje)) ? true : false;

			}
		</script>
		<a href="cuenta.php" class="btn btn-primary" style="margin-top: 20px;">Regresar</a>
	</div>
</body>

</html>