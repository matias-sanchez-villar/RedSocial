<?php

class Conexion{
    
    private $User = "root";
    private $Pass = "";
    protected $Conexion;
    
    public function __construct(){
        try{
            
            $this->Conexion = new PDO ('mysql:host=localhost;dbname=redsocial', $this->User, $this->Pass);
            
            
        }catch(PDOException $e){
            
            die("Error: " . $e->getMessage());
            
        }finally{
            
            $this->Conexion = null;
            
        }
    }
}