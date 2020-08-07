<div class="container">
    <div class="jumbotron">
        <h2>formulario registro</h2>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <form action="index.php?controller=Estudiante&action=guardarCambios" method="post">                    
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_cedula">CEDULA:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="cedula" value="<?=$estudiante->getCedula();?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_nombre">NOMBRE:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre" value="<?=$estudiante->getNombre();?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_apellidos">APELLIDOS:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="apellido" value="<?=$estudiante->getApellido();?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_edad">EDAD:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="edad" value="<?=$estudiante->getEdad();?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-md-off-set-3">
                        <input type="submit" class="btn btn-primary form-control" name="" value="actualizar">
                    </div>
                </div>
            </form>
            
        </div>
    </div>
    
</div>