<?php 
  // index.php?controller=Profesor&action=listar   
  require_once 'autoload.php';
 
  if(isset($_GET['controller'])){
      $nombreControlador = $_GET['controller'].'Controller';
      $controller = new $nombreControlador();
  }else{
      $controller = new EstudianteController();
  }
  if(!isset($_GET['action'])){
      $controller->listar();
  }else{
      $metodo = $_GET['action'];
      $controller->$metodo();
  }
  
?>