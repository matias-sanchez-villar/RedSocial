<?php

require("Conexion.php");

class Usuario extends Conexion{
    
    private $ID;
    private $Nombre;
    private $Apellido;
    private $Sexo;
    private $FechaNacimiento;
    private $Email;
    private $Contrasena;
    
    public function __construct(){
        parent::__construct();
    }
    public function Registrar($valores){
        var_dump($valores);///ver como pasar el array _post entero
    }
}