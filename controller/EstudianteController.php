<?php

require_once 'model/EstudianteModel.php';

class EstudianteController {
    
    private $model;
    
    function __construct() {
        $this->model = new EstudianteModel();
    }
    
     public function listar(){
         
         $estudiantes = $this->model->listarEstudiantes();
         require_once 'view/include/header.php';
         require_once 'view/estudiante/listar.php';
         require_once 'view/include/footer.php';
     }
     
     public function mostrarRegistar(){
         require_once 'view/include/header.php';
         require_once 'view/estudiante/crear.php';
         require_once 'view/include/footer.php';         
     }
     
     public function registrar(){
         //1. Obtener todos los datos del formulario por $_POST
         $cedula = $_POST['cedula'];
         $nombre = $_POST['nombre'];
         $apellido = $_POST['apellido'];
         $edad = $_POST['edad'];
         
         //2. Crear un objeto Estudiante y enviar a actualizar
         $estudiante = new Estudiante($cedula,$nombre,$apellido,$edad);  
         
         //3. llamar al modelo para registar un Estudiante
         $this->model->registrarEstudiante($estudiante);
         
         //4. redirección index.    
         header("location:index.php");
     }
     
     public function editar(){
         //1. obtener la cedula del $_GET
         $cedula = $_GET['cedula'];
         //2. usar el modelo para traer de la BD el estudiante
         $estudiante = $this->model->buscarEstudiante($cedula);
         //3. llamar a la vista de editar
         require_once 'view/include/header.php';
         require_once 'view/estudiante/editar.php';
         require_once 'view/include/footer.php';
     }
     
     public function guardarCambios(){
         //1. Obtener todos los datos del formulario por $_POST
         $cedula = $_POST['cedula'];
         $nombre = $_POST['nombre'];
         $apellido = $_POST['apellido'];
         $edad = $_POST['edad'];
         
         //2. Crear un objeto Estudiante y enviar a actualizar
         $estudiante = new Estudiante($cedula,$nombre,$apellido,$edad);         
         
         //3. llamar al modelo para guarde los cambios
         $this->model->actualizar($estudiante);
         
         //4. redirección index.    
         header("location:index.php");
     }
     
}
