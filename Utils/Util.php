<?php

class Util {
   
    public static function estaLogueado(){        
        if(isset($_SESSION['usuarioLogueado'])){            
            return true;
        }else{
           header("location:index.php?controller=Usuario&action=mostrarLogin"); 
        }
    }
    
    public static function esAdmin(){
        if($_SESSION['usuarioAdmin']){
            return true;
        }else{
           header("location:index.php?controller=Usuario&action=mostrarLogin"); 
        }        
    }
    
    public static function esArtesano(){
        if($_SESSION['usuarioArtesano']){
            return true;
        }else{
           header("location:index.php?controller=Usuario&action=mostrarLogin"); 
        }        
    }    
    
    public static function mostarAlerta($mensaje){        
            echo '<script type="text/javascript"> ';
            echo ' alert("'.$mensaje.'");';
            echo ' window.location.href="index.php";';
            echo '</script>';
    }
    
}
