<?php

class CarreraController {
    
    public function registar(){
        require 'view/include/header.php';
        echo '<h1>Formulario para agregar una carrera</h1>';
        require 'view/include/footer.php';
    }
    
    public function listar(){
        
        Util::estaLogueado();        
        require 'view/include/header.php';
        echo '<h1>Listado de Carreras</h1>';
        require 'view/include/footer.php';
    }   
    
}
