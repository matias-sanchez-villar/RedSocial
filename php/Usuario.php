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
    private $Statement;
    
    public function __construct(){
        parent::__construct();
    }
    
    public function Cargar($Array){
        if(isset($Array['Nombre'])){
            $this->Nombre= $Array['Nombre'];
        }
        if(isset($Array['Apellido'])){
            $this->Apellido= $Array['Apellido'];
        }
        if(isset($Array['Sexo'])){
            $this->Sexo= $Array['Sexo'];
        }
        if(isset($Array['Fecha'])){
            $this->FechaNacimiento= $Array['Fecha'];
        }
        if(isset($Array['Email'])){
            $this->email= $Array['Email'];
        }
        if(isset($Array['contrasena'])){
            $this->Contrasena= $Array['contrasena'];
        }
    }
    
    public function Registrar(){
        /*
        *
        *       (SELECT * FROM usuarios WHERE Email=$this->Array['email']) /// QUE NO SE REPITA EMAIL 
        *       (INSERT INTO usuarios(Nombre, Apellido, Sexo, FechaNacimiento, Email, Contrasena) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8]))
        */

        $this->Statement = $this->Conexion = prepare("INSERT INTO usuarios(Nombre, Apellido, Sexo, FechaNacimiento, Email, Contrasena) VALUES (?,?,?,?,?,?)");
    
        $this->Statement = execute(array($this->Nombre,$this->Apellido,$this->Sexo,$this->FechaNacimiento,$this->Email,$this->Contrasena));    
    
    }

    public function Login(){
    }

    public function Obtener(){
        /*
        *
        *       (SELECT * FROM usuarios WHERE Nombre=$this->Array['Nombre']) /// QUE NO SE REPITA EMAIL 
        *       return array
        */
    }
}