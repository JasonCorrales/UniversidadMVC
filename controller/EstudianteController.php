<?php

require_once 'model/EstudianteModel.php';

class EstudianteController {
    
    private $model;
    
    function __construct() {
        $this->model = new EstudianteModel();
    }
    
     public function listarEstudiantes(){
         $estudiantes = $this->model->listarEstudiantes();
         require_once 'view/include/header.php';
         require_once 'view/estudiante/listar.php';
         require_once 'view/include/footer.php';
     }
}
