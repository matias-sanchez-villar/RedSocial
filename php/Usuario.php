<?php

require_once ("Conexion.php");

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
    
    public function Registrar($Array){
        
    }

    public function Login($Array){
        
    }

    public function Obtener($Nombre){
        
    }
}