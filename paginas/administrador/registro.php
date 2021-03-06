<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
</head>
<body style="background: url(../../assets/img/fondo.jpg)">
    <div class="container shadow p-3 mb-5 bg-white rounded" style="margin-top: 30px">
        <h1>Registro</h1>
        <hr>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" id="txt_nombre" class="form-control">
                </div>
                <div class="form-group">
                    <label>Correo</label>
                    <input type="email" id="txt_correo" class="form-control" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" id="txt_contra" class="form-control">
                </div>
                <div class="form-group">
                    <label>Confirma tu Contraseña</label>
                    <input type="password" id="txt_confirm_contra" class="form-control">
                </div>
                
                <div class="form-group">
                    <button id="btn_registrar" class="btn btn-primary btn-block">Registrarme</button>
                </div>
                <div class="form-group text-center">
                    <label>Ya tienes una cuenta? <a href="index.php">Iniciar Sesion</a></label> 
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../javascript/jquery.min.js"></script>
</body>
</html>