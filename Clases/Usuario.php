<?php
    require_once("Persona.php");
    
    class Usuario extends Persona{
        
        private $idPersona, $Email, $Contraseña;
        
        public function __construct(){
            parent::__construct();
        }
        
        /// Insertar datos de Usuario
        public function set_Usuario($idPersona, $Email, $Contraseña){
            parent::set_Persona();
            
            $this->idPersona=$idPersona;
            $this->Email=$Email;
            $this->Contraseña=$Contraseña;

            $sql="INSERT INTO `usuario`(`idPersona`, `Email`, `Contraseña`) VALUES (:idPersona, :Email, :Contraseña)";
        
            $resultado=$this->conexion->prepare($sql);
            
            $resultado->bindValue(":idPersona", $idPersona);
            $resultado->bindValue(":Email", $Email);
            $resultado->bindValue(":Contraseña", $Contraseña);
            
            $resultado->execute();
            return $resultado->rowCount();
        }

        /// Retirar datos de Usuario -- los retira con array asociativo
        public function get_Usuario(){
            $sql="SELECT * FROM USUARIO";

            $resultado=$this->conexion->prepare($sql);
            
            $sentencia= $this->conexion->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();
            return $resultado;
        }
    }

?>