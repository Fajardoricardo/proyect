<?php
class vistas_mod{
    public $id;
    public $url;
    public $estado;

 function __get($propiedad){
    if(property_exists($this,$propiedad)){
        return $this -> $propiedad;
    }
 }
 function __set($propiedad, $valor)
 {
    if (property_exists($this,$propiedad)) {
        $this -> $propiedad = $valor;
    }
 }function __construct($id,$url,$estado)
 {
    $this->id=$id; 
    $this->url=$url; 
    $this->estado=$estado; 
 }  
}
?>