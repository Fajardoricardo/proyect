<?php

class conexion {
    private $userName="root";
    private $password="";
    private $serverName="localhost";
    private $databaseName="sistema_seguridad";
    private $conexion="";

    public function getConexion(){
        try{
            $this->conexion=new PDO("mysql:host=$this->serverName;
                dbname=$this->databaseName",$this->userName,$this->password);
               
                return $this->conexion;
        }catch (PDOException $e) {
            echo "Error en la conexion con la base de datos".$e->getMessage();
            return "";
        }
    } public function closeConexion(){
        $this->conexion=null;
    }
}
?>