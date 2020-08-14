<div class="container">
    <div class="jumbotron">
        <h2>Inicio de Sesión</h2>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <form action="index.php?controller=Usuario&action=login" method="post">
                <div class="form-group">
                    <label class=" col-sm-2 control-label">CORREO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="correo">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label">PASSWORD:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password">
                    </div>
                <div class="form-group">
                    <div class="col-md-12 col-md-off-set-3">
                        <input type="submit" class="btn btn-primary form-control" name="" value="login">
                    </div>
                </div>
            </form>            
        </div>
    </div>
</div>