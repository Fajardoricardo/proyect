<?php
class usuario_mod
{
    public $id;
    public $id_rol;
    public $nombre;
    public $apellido;
    public $telefono;
    public $correo;
    public $password;
    public $pregunta_seguridad1;
    public $respuesta_seguridad1;
    public $pregunta_seguridad2;
    public $respuesta_seguridad2;
    public $pregunta_seguridad3;
    public $respuesta_seguridad3;
    public $strate;

    function __get($propiedad)
    {
        if (property_exists($this, $propiedad)) {
            return $this->$propiedad;
        }
    }
    function __set($propiedad, $valor)
    {
        if (property_exists($this, $propiedad)) {
            return $this->$propiedad = $valor;
        }
    }
    function __construct(
        $id,
        $id_rol,
        $nombre,
        $apellido,
        $telefono,
        $correo,
        $password,
        $pregunta_seguridad1,
        $respuesta_seguridad1,
        $pregunta_seguridad2,
        $respuesta_seguridad2,
        $pregunta_seguridad3,
        $respuesta_seguridad3,
        $strate
    ) {
        $this->id = $id;
        $this->id_rol = $id_rol;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->password = $password;
        $this->pregunta_seguridad1 = $pregunta_seguridad1;
        $this->respuesta_seguridad1 = $respuesta_seguridad1;
        $this->pregunta_seguridad2 = $pregunta_seguridad2;
        $this->respuesta_seguridad2 = $respuesta_seguridad2;
        $this->pregunta_seguridad3 = $pregunta_seguridad3;
        $this->respuesta_seguridad3 = $respuesta_seguridad3;
        $this->strat = $strate;
    }
}
?>