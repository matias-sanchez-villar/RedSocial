<?php
    require_once("Conexion.php");
    
    class Persona extends Conexion{
        
        private $Nombre, $Apellido, $FechaNacimiento, $Estado;
        
        public function __construct(){
            parent::__construct();
        }
        
        /// Insertar datos de persona
        public function set_Persona($Nombre, $Apellido, $FechaNacimiento, $Estado){
            $this->Nombre= $Nombre;
            $this->Apellido= $Apellido;
            $this->FechaNacimiento= $FechaNacimiento;
            $hoy = new DateTime();
            $this->Edad= $hoy->diff($FechaNacimiento);
            $this->Estado= $Estado;

            $sql="INSERT INTO `persona`(`Nombre`, `Apellido`, `FechaNacimiento`, `Edad`, `Estado`) VALUES (:Nombre, :Apellido, :FechaNacimiento, :Edad, :Estado)";
        
            $resultado=$this->conexion->prepare($sql);
            
            $resultado->bindValue(":Nombre", $Nombre);
            $resultado->bindValue(":Apellido", $Apellido);
            $resultado->bindValue(":FechaNacimiento", $FechaNacimiento);
            $resultado->bindValue(":Edad", $Edad);
            $resultado->bindValue(":Estado", $Estado);
            
            $resultado->execute();
            return $resultado->rowCount();
        }

        /// Retirar datos de persona -- los retira con array asociativo
        public function get_Persona(){
            $sql="SELECT * FROM PERSONA";

            $resultado=$this->conexion->prepare($sql);
            
            $sentencia= $this->conexion->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();
            return $resultado;
        }
    }

?>