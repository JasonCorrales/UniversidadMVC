<?php 
  // index.php?controller=Profesor&action=listar 
  session_start();
  require_once 'autoload.php';
  require_once 'Utils/Util.php';
  
  // Se obtiene el controlador a ejecutar
  if(isset($_GET['controller'])){
      $nombreControlador = $_GET['controller'].'Controller';
      $controller = new $nombreControlador();
  }else{
      $controller = new EstudianteController();
  }
  // Se obtiene la acción a ejecutar
  if(isset($_GET['action'])){
      $metodo = $_GET['action'];
      $controller->$metodo();      
  }else{
      $controller->listar();
  }  
?>