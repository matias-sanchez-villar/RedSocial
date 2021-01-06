<?php
    require_once("Persona.php");
    
    class Publicacion extends Persona{
        
        private $idPersona, $Texto, $Foto;
        
        public function __construct(){
            parent::__construct();
        }
        
        /// Insertar datos de Publicacion
        public function set_Publicacion($idPersona, $Texto, $Foto){
            $this->idPersona=$idPersona;
            $this->Email=$Email;
            $this->Contraseña=$Contraseña;

            $sql="INSERT INTO `publicacion`(`idPersona`, `Texto`, `Foto`) VALUES (:idPersona, :Texto, :Foto)";
        
            $resultado=$this->conexion->prepare($sql);
            
            $resultado->bindValue(":idPersona", $idPersona);
            $resultado->bindValue(":Texto", $Texto);
            $resultado->bindValue(":Foto", $Foto);
            
            $resultado->execute();
            return $resultado->rowCount();
        }

        /// Retirar datos de Publicacion -- los retira con array asociativo
        public function get_Publicacion(){
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