<?php 
class rol_mod{
    public $id;
    public $descripcion;
    public $estado;

    function __get($propiedad){
        if (property_exists($this,$propiedad)) {
            return $this -> $propiedad;
        }
    }function __set($propiedad,$valor){
        if (property_exists($this,$propiedad)) {
            $this -> $propiedad;
        }
    }
    function __construct($id,$descripcion,$estado)
    {
    $this->id=$id;
    $this->descripcion=$descripcion;
    $this->estado=$estado;  
    }
}
?>