<?php

require_once 'baseDatos/conexion.php';
require_once 'Estudiante.php';

class EstudianteModel {
    
    private $bd;
    
    function __construct() {
        $this->bd = new ConexionBD();
    }

    public function listarEstudiantes(){
        $estudiantes = array();
        $this->bd->getConeccion();        
        $sql="SELECT * FROM ESTUDIANTES";        
        $registros = $this->bd->executeQueryReturnData($sql);                
        $this->bd->cerrarConeccion();
        
        foreach($registros as $row) {
            $estudiante = new Estudiante($row['cedula'],$row['nombre'],$row['apellido'],$row['edad']); 
            array_push($estudiantes, $estudiante);
        }
        
        return $estudiantes;
    }
    
    public function buscarEstudiante($cedula){
        $this->bd->getConeccion();
        $sql="SELECT * FROM ESTUDIANTES WHERE CEDULA = $cedula";        
        $registros = $this->bd->executeQueryReturnData($sql);  
        $this->bd->cerrarConeccion();
        
        if($registros !=null){
            $cedula = $registros[0]['cedula'];
            $nombre = $registros[0]['nombre'];
            $apellido = $registros[0]['apellido'];
            $edad = $registros[0]['edad'];
            
            $estudiante = new Estudiante($cedula,$nombre,$apellido,$edad);
            return $estudiante;
        }else{
           return null;   
        }
    }
        
    public function actualizar($estudiante){
        $this->bd->getConeccion();        
        $sql="UPDATE ESTUDIANTES SET NOMBRE=?, APELLIDO=?, EDAD=? WHERE CEDULA=?";
        $paramType= 'ssis';
        $paramValue= array($estudiante->getNombre(),
                           $estudiante->getApellido(),
                           $estudiante->getEdad(),
                           $estudiante->getCedula());
        $registros = $this->bd->executeQuery($sql, $paramType, $paramValue);                
        $this->bd->cerrarConeccion();        
    }
    
}
