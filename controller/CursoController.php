<?php


class CursoController {
    
    public function registar(){
        require 'view/include/header.php';
        echo '<h1>Formulario para agregar un Curso</h1>';
        require 'view/include/footer.php';
    }
    
    public function listar(){
        require 'view/include/header.php';
        echo '<h1>Listado de Cursos</h1>';
        require 'view/include/footer.php';
    }  
}
