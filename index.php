<?php
  
  require_once 'controller/EstudianteController.php';

  $controller = new EstudianteController();
  
  if(!isset($_GET['action'])){
      $controller->listarEstudiantes();
  }else{
      $metodo = $_GET['action'];
      $controller->$metodo();
  }
?>