<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body style="background: url(assets/img/fondo.jpg)">
    <?php
    //Instancia de la Base de datos
    include_once("core/baseDatos.php");

    //Cambiar según sea necesario
    $host = "localhost";
    $dbname = "BD_consultalibros.sql"; //Poner nombre de BD Aquí 
    $user = "root";
    // $pass = "mysql"; //Dejar vacía si se usa XAMPP, mysql para AMPPS

    $objBD = new baseDatos($host,$dbname,$user,$pass);
    ?>
    <div class="container shadow p-3 mb-5 bg-white rounded" style="max-width: 450px; height: 500px; margin-top: 90px">
        <h2>Seleccione su tipo de usuario para poder ingresar</h2>
        <hr>
        <table>
            <tr>
            <td>
                <div class="container">
                    <img src="assets/img/usuario.png" alt="Imagen de visitante" style="height:40%; width:40%">
                <a href="paginas/visitante/libros.php">Visitante</a> 
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="container">
                    <img src="assets/img/administrador.png" alt="imagen de Administrador" style="height:40%; width:40%">
                    <a href="paginas/administrador/index.php">Administrador</a>
                </div>
            </td>
        </tr>
        </table>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../javascript/jquery.min.js"></script>
    <script src="../javascript/login.js"></script>
</body>
</html>