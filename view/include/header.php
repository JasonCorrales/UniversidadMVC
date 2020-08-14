<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CRUD</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nuevo Registro <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                   <li><a href="index.php?controller=Estudiante&action=mostrarRegistar">Estudiante</a></li>
                </ul>                
              </li>               
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Listar <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                   <li><a href="index.php?controller=Estudiante&action=listar">Estudiantes</a></li>
                   <?php if(isset($_SESSION['usuarioLogueado'])): ?>
                   <li><a href="index.php?controller=Carrera&action=listar">Carreras</a></li>
                   <?php endif;?>
                   <li><a href="index.php?controller=Curso&action=listar">Cursos</a></li>
                   <li><a href="index.php?controller=Profesor&action=listar">Profesores</a></li>
                </ul>                
              </li>  
              <li class="dropdown">
                <?php if(isset($_SESSION['usuarioLogueado'])): ?>  
                <a href="index.php?controller=Usuario&action=cerrarSesion" class="dropdown-toggle" role="button" aria-expanded="false">Cerrar Sesión</a>
                <?php else:?>
                <a href="index.php?controller=Usuario&action=mostrarLogin" class="dropdown-toggle" role="button" aria-expanded="false">Login</a>
                <?php endif;?>
              </li>               
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->        
      </nav>
</header>
    