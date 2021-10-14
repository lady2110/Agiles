<?php

//print_r($_POST);
$idProducto = (isset($_POST['idProducto'])) ? $_POST['idProducto'] : "";
$nombreProducto = (isset($_POST['nombreProducto'])) ? $_POST['nombreProducto'] : "";
$precio = (isset($_POST['precio'])) ? $_POST['precio'] : "";
$tipoProducto = (isset($_POST['tipoProducto'])) ? $_POST['tipoProducto'] : "";
$imagen = (isset($_FILES['imagen']["name"])) ? $_FILES['imagen']["name"] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";
//Almacenar todos los errores:
$error = array();

$accionAgregar = "";
$accionModificar = $accionEliminar = $accionCancelar = "disabled";
$mostrarModal = false;

$servername = "localhost";
$username = "root";
$password = "";

try {
	$conn = new PDO("mysql:host=$servername;dbname=pandequesos", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// echo "Connected successfully";
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}


switch ($accion) {
	case "btnAgregar":
		if ($nombreProducto == "") {
			$error['nombreProducto'] = "Ingrese el Nombre del Producto";
		}
		if ($precio == "") {
			$error['precio'] = "Ingrese un Valor";
		}
		if ($tipoProducto == "") {
			$error['tipoProducto'] = "Ingrese el Tipo de Producto";
		}
		if (count($error) > 0) {
			$mostrarModal = true;
			break;
		}

		$sentencia = $conn->prepare("INSERT INTO producto(nombreProducto,precio,tipoProducto,imagen)
         VALUES (:nombreProducto,:precio,:tipoProducto,:imagen)");
		$sentencia->bindParam(':nombreProducto', $nombreProducto);
		$sentencia->bindParam(':precio', $precio);
		$sentencia->bindParam(':tipoProducto', $tipoProducto);

		$Fecha = new DateTime();
		$nombreArchivo = ($imagen != "") ? $Fecha->getTimestamp() . "_" . $_FILES["imagen"]["name"] : "";
		$tmpFoto = $_FILES["imagen"]["tmp_name"];
		if ($tmpFoto != "") {
			move_uploaded_file($tmpFoto, "./images/" . $nombreArchivo);
		}

		$sentencia->bindParam(':imagen', $nombreArchivo);
		$sentencia->execute();
		header('Location: crudProducto.php');
		break;

	case "btnModificar":

		$sentencia = $conn->prepare("UPDATE producto SET 
            nombreProducto=:nombreProducto,
            precio=:precio,
            tipoProducto=:tipoProducto
            WHERE idProducto=:idProducto");

		$sentencia->bindParam(':nombreProducto', $nombreProducto);
		$sentencia->bindParam(':precio', $precio);
		$sentencia->bindParam(':tipoProducto', $tipoProducto);
		$sentencia->bindParam(':idProducto', $idProducto);
		$sentencia->execute();



		$Fecha = new DateTime();
		$nombreArchivo = ($imagen != "") ? $Fecha->getTimestamp() . "_" . $_FILES["imagen"]["name"] : "";
		$tmpFoto = $_FILES["imagen"]["tmp_name"];
		if ($tmpFoto != "") {
			move_uploaded_file($tmpFoto, "./images/" . $nombreArchivo);

			$sentencia = $conn->prepare("SELECT imagen FROM producto WHERE idProducto=:idProducto");
			$sentencia->bindParam(':idProducto', $idProducto);
			$sentencia->execute();
			$productos = $sentencia->fetch(PDO::FETCH_LAZY);
			print_r($productos);

			if (isset($productos["imagen"])) {
				if (file_exists("" . $productos["imagen"])) {
					if ($productos['imagen'] != "imagen.jpg") {
						unlink("" . $productos["imagen"]);
					}
				}
			}

			$sentencia = $conn->prepare("UPDATE producto SET 
            imagen=:imagen WHERE idProducto=:idProducto");
			$sentencia->bindParam(':imagen', $nombreArchivo);
			$sentencia->bindParam(':idProducto', $idProducto);
			$sentencia->execute();
		}
		header('Location: crudProducto.php');
		echo $idProducto;
		echo "Presionaste btnModificar ";
		break;

	case "btnEliminar":
		$sentencia = $conn->prepare("SELECT imagen FROM producto WHERE idProducto=:idProducto");
		$sentencia->bindParam(':idProducto', $idProducto);
		$sentencia->execute();
		$productos = $sentencia->fetch(PDO::FETCH_LAZY);
		print_r($productos);

		if (isset($productos["imagen"]) && ($item['imagen'] != "imagen.jpg")) {
			if (file_exists("" . $productos["imagen"])) {
				unlink("" . $productos["imagen"]);
			}
		}

		$sentencia = $conn->prepare("DELETE FROM producto WHERE idProducto=:idProducto");
		$sentencia->bindParam(':idProducto', $idProducto);
		$sentencia->execute();

		header('Location: crudProducto.php');
		echo $idProducto;
		echo "Presionaste btnEliminar ";
		break;

	case "btnCancelar":
		header('Location: crudProducto.php');
		break;

	case "Seleccionar":
		$accionAgregar = "disabled";
		$accionModificar = $accionEliminar = $accionCancelar = "";
		$mostrarModal = true;

		$sentencia = $conn->prepare("SELECT * FROM producto WHERE idProducto=:idProducto");
		$sentencia->bindParam(':idProducto', $idProducto);
		$sentencia->execute();
		$productos = $sentencia->fetch(PDO::FETCH_LAZY);

		$nombreProducto = $productos['nombreProducto'];
		$precio = $productos['precio'];
		$tipoProducto = $productos['tipoProducto'];
		$imagen = $productos['imagen'];


		break;
}
$sentencia = $conn->prepare("SELECT * FROM `producto` WHERE 1");
$sentencia->execute();
$listaProducto = $sentencia->fetchAll(PDO::FETCH_ASSOC);
//print_r($listaProducto);
