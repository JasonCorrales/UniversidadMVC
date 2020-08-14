<?php
require_once 'baseDatos/conexion.php';
require_once 'Usuario.php';

class UsuarioModel {
    
    private $bd;
    
    function __construct() {
        $this->bd = new ConexionBD();      
    }
    
    public function login($correo, $password){
        
        $this->bd->getConeccion();
        
        $sql="SELECT * FROM USUARIO WHERE CORREO ='$correo' AND PASSWORD = '$password'";        
        $registros = $this->bd->executeQueryReturnData($sql);  
        $this->bd->cerrarConeccion();

        if($registros !=null){
            $correo   = $registros[0]['correo'];
            $password = $registros[0]['password'];
            $nombre   = $registros[0]['nombre'];

            $usuario = new Usuario($nombre,$correo,$password);
            return $usuario;
        }else{
           return null;   
        }         
        
    }
}
