<?php
class Producto
{
    //la clase producto tiene las siguientes variables..
    private $db;
    private $db_tablaProducto = "producto";
    // atributos para los campos
    public $idProducto;
    public $nomProducto;
    public $precio;
    public $tipoProducto;

    public $resultado;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Recuperar todos los productos

    function getPro()
    {
        $sqlquery = "SELECT idProducto, nombreProducto, precio, tipoProducto, imagen FROM " . $this->db_tablaProducto . "";
        $this->result = $this->db->query($sqlquery);
        return $this->result;
    }



    function getProXId()
    {
        $sqlquery = "SELECT  idProducto, nombreProducto, precio, tipoProducto FROM " . $this->db_tablaProducto . " WHERE idProducto = " . $this->idProducto;
        $registro = $this->db->query($sqlquery);
        $datarow = $registro->fetch_assoc();

        if ($registro->num_rows > 0) {

            $this->nomProducto = $datarow['nombreProducto'];
            $this->precioProducto = $datarow['precio'];
            $this->tipoProducto = $datarow['tipoProducto'];
        } else {
            $this->nomProducto = '';
        }
    }
    function crearPro()
    {

        $sqlquery = "INSERT INTO " . $this->db_tablaProducto . " (nombreProducto, precio, tipoProducto, imagen) VALUES('$this->nomProducto','$this->precio','$this->tipoProducto')";

        $this->db->query($sqlquery);
        if ($this->db->affected_rows > 0) {
            return true;
        }
        return false;
    }

    function UpdatePro()
    {
        $sqlQuery = "UPDATE " . $this->db_tablaProducto . " SET nombreProducto = '" . $this->nomProducto . "',
        precio = '" . $this->precio . "',
        tipoProducto = '" . $this->tipoProducto . "'  
        WHERE idProducto = " . $this->idProducto;

 
        $this->db->query($sqlQuery);
        if ($this->db->affected_rows > 0) {
            return true;
        }
        return false;
    }

    function deletePro()
    {
        $sqlQuery = "DELETE FROM " . $this->db_tablaProducto . " WHERE idProducto = " . $this->idProducto;
        $this->db->query($sqlQuery);
        if ($this->db->affected_rows > 0) {
            return true;
        }
        return false;
    }
}

?>