<?php
class Conexion{
    public $db;
    public function getConexion(){
        $this->db=null;
        try{
            $this->db = new mysqli('localhost','root','','pandequesos');
        }
        catch (Exception $e){
            echo "No se puede acceder a la base de datos".$e->getMessage();
        }
        return $this->db;
    }
}
?>