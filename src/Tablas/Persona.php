<?php 

namespace App\Tablas;
use App\Tablas\Usuario;

class Persona extends Modelo
{
    protected static string $tabla = 'persona';
    public $id;
    private $dni;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $gen;

    public  function __construct(array $campos)
    {
        $this->tabla = 'persona';
        $this->id = $campos['id'];
        $this->dni = $campos['dni'];
        $this->nombre = $campos['nombre'];
        $this->apellido1 = $campos['apellido1'];
        empty($campos['apellido2']) ? $this->apellido2 = $campos['apellido2'] : $this->apellido2 = null ;
        $this->gen = $campos['gen'];
    }

    public static function constructor_usuario(){
        
    }

    
}