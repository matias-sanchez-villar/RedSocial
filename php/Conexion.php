<?php

class Conexion{
    
    private $User = "root";
    private $Pass = "";
    protected $Conexion;
    
    public function __construct(){
        try{
            
            $this->Conexion = new PDO ('mysql:host=localhost;dbname=redsocial', $this->User, $this->Pass);
            $this->Conexion ("SET CHARACTER SET utf-8");
            
        }catch(PDOException $e){
            
            die("Error: " . $e->getMessage());
            
        }finally{
            
            $this->Conexion = null;
            
        }
    }
}