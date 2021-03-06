<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nuevo libro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
</head>
<body style="background: url(../../assets/img/fondo.jpg)">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: rgba(0, 0, 0, .7)">
        <span class="navbar-brand mb-0 h1">Nuevo libro</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="nuevo_libro.php">Agregar libros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nuevo_autor.php">Agregar autores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nuevo_asignatura.php">Agregar Asignaturas</a>
                </li>
            </ul>
            <div>
                <button type="button" id="btn_logout" class="btn btn-outline-light" onclick="location.href='../../index.php'">Cerrar Sesion</button>
            </div>
        </div>
    </nav>
    <div class="container shadow p-3 mb-5 bg-white rounded" style="max-width: 600px; height: 500px; margin-top: 50px">
        <h3>Agregar libro</h3>
        <hr>
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" id="txt_titulo" class="form-control">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Autor</label>
                    <select id="scl_autor" class="form-control"></select>
                </div>
                <div class="form-group">
                    <label>Código</label>
                    <input type="text" id="txt_ubicacion" class="form-control">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Asignatura</label>
                    <select id="slc_asignatura" class="form-control"></select>
                </div>
            </div>
        </div>
        <div>
            <a href="libros.php"><button class="btn btn-lg btn-outline-secondary">Regresar</button></a>
            <button id="btn_aceptar_libros" class="btn btn-lg btn-outline-success float-right">Aceptar</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../javascript/jquery.min.js"></script>
    <script type="text/javascript" src="../javascript/validaciones.js"></script>
    <script type="text/javascript" src="../javascript/nuevo_libro.js"></script>
</body>
</html>