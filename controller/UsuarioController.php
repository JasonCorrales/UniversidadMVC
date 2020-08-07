<?php

require_once 'model/UsuarioModel.php';

class UsuarioController {
    
    private $model;
    
    function __construct() {
        $this->model = new UsuarioModel();
    }
    
    public function login(){
        //1. Obtener los datos de $_POST
         $correo   = $_POST['correo'];
         $password = $_POST['password'];

         //2. llamar al modelo para evaluar
         $usuario = $this->model->login($correo, $password);
         
        //3. depediendo del resultado redireccionar a index o al login        
         if($usuario != null){
          $_SESSION['usuarioLogueado'] = $usuario;
            header("location:index.php"); 
         }else{
            header("location:index.php?controller=Usuario&action=MostrarLogin");    
         }
    }
}
