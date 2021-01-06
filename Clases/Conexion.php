<?php

    class Conexion{
        private $Conexion;
        public function __construct(){
            try{
                $this->conexion= new PDO ('mysql:host=localhost; dbname=redsocial', 'root', ''); 
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conexion->exec("SET CHARACTER SET utf8");
                return $this->conexion;
            }catch(Exception $e){
                die("Error: " . $e->getMessage());
        }
    }

?>