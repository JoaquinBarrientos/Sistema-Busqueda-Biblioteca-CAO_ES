<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
</head>
<body style="background: url(../../assets/img/fondo.jpg)">
    <div class="container shadow p-3 mb-5 bg-white rounded" style="max-width: 450px; height: 500px; margin-top: 90px">
        <h1>Login</h1>
        <hr>
        <div class="form-group">
            <label>Correo electronico</label>
            <input type="email" class="form-control" id="txt_email">
        </div>
        <div class="form-group">
            <label>Contraseña</label>
            <input type="password" class="form-control" id="txt_clave">
        </div>
        <div class="form-group">
            <label>No tienes una cuenta?</label>
            <a href="registro.php">Registrate</a>
        </div>
        <div class="form-group">
            <button id="btn_login" class="btn btn-primary" onclick="location.href='libros.php'">Iniciar Sesión</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../javascript/jquery.min.js"></script>
    <!--<script src="../../assets/js/login.js"></script>-->
</body>
</html>