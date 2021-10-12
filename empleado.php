<?php
class Empleado
{
	//la clase producto tiene las siguientes variables..
	private $db;
	private $db_tablaEmpleado = "empleado";
	// atributos para los campos
	public $id;
	public $cedula;
	public $nombre;
	public $telefono;
	public $direccion;
	public $cargo;
	public $fecha;
	public $salario;
	public $correo;

	public $resultado;

	public function __construct($db)
	{
		$this->db = $db;
	}

	function crearEmpleado()
	{

		$sqlquery = "INSERT INTO " . $this->db_tablaEmpleado . " (cedula, nombre, telefono, direccion, cargo, fecha, salario, correo) VALUES('$this->cedula','$this->nombre','$this->telefono','$this->direccion','$this->cargo','$this->fecha','$this->salario','$this->correo')";

		$this->db->query($sqlquery);
		if ($this->db->affected_rows > 0) {
			return true;
		}
		return false;
	}
}
