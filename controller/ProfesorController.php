<?php

class ProfesorController {
    
    public function registar(){
        require 'view/include/header.php';
        echo '<h1>Formulario para agregar un Profesor</h1>';
        require 'view/include/footer.php';
    }
    
    public function listar(){
        require 'view/include/header.php';
        echo '<h1>Listado de Profesores</h1>';
        require 'view/include/footer.php';
    }  
}
