<?php
session_start();
//si hay una sesión
if (isset($_SESSION['name'])) {
    //se muestra el contenido de la página web
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/fontello.css" /><!-- para el icono del menu -->
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Elvin /////////////// -->
  <div class="container-fluid">
      
        <header >
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home.php">
                    
                    <img src="img/logo-unah.png" alt="la imagen se mamo" width="110" height="60">
                    
                    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link active" href="centros-regionales.html">Matricula</a></li>
                        <li class="nav-item"><a class="nav-link" href="facultades.html">solicitudes</a></li>
                        <li class="nav-item"><a class="nav-link" href="historial.php">Historial Academico</a></li>
                        
                    </ul>
                    

                        <div class="dropdown" style="margin-left:0; ">
                            <button type="button" class="btn dropdown-toggle perfil" data-toggle="dropdown" style="box-shadow:none;">
                                <img src="img/foto.jpg" class="rounded-circle foto-perfil " width="50px" alt="Cinque Terre">
                                <?php print $_SESSION['name']; ?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             
                             <a class="dropdown-item" href="#">configuraciones</a>
                             
                             <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="cerrar_sesion.php">salir</a>
          
                             </div>
                        </div>
                    
                </div>
                </div>
            </nav>
        </header>
    </div>
    <!-- fin-Elvin//////////// -->
    <div class="container">
        
<!-- Matrícula/////////////////// -->
        <!-- adicionar////// -->
        <div class="container-fluid border my-5" style="padding: 5px;">
            <h3 style="color: rgb(131, 2, 2);">Matrícula</h3>
            <div class="row">
                <div class="col-12">
                    <p>Adicionar Asignatura</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="sel1" class="encabezado-tabla my-2">Departamento:</label>
                        <select class="form-control" id="sel1">
                            <option>Matemáticas</option>
                            <option>Ingenieria en Sistemas</option>
                            <option>Sociología</option>
                            <option>Materia Condensada</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="sel2" class="encabezado-tabla my-2">Asignatura:</label>
                        <select class="form-control" id="sel2">
                            <option>POO</option>
                            <option>Ingenieria en Sistemas</option>
                            <option>Sistemas Operativos</option>
                            <option>Progra 2</option>
                            <option>Estudios de la mujer</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="sel3" class="encabezado-tabla my-2">Sección:</label>
                        <select class="form-control" id="sel3">
                            <option>10:00 Guevara</option>
                            <option>8:00 Hilda</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- si la clase tiene laboratorio -->
                    <div class="container-fluid d-none">
                    <div class="form-group">
                        <label for="sel3" class="encabezado-tabla my-2">Sección Laboratorio:</label>
                        <select class="form-control" id="sel3">
                            <option>0800 Lu</option>
                            <option>1000 Mi</option>
                        </select>
                    </div> 
                    </div>
                    <!-- ///////////////////////////// -->
                   <button type="button" class="btn btn-danger" style="margin-bottom: 1em;">Matricular Asignatura</button>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br><br>
        <br><br>
        <br>
    
    </div>
    
    

    <!-- footer /////////////////////////////// -->
    <footer class="text-center" style="width: 100%;position: relative;background: none;border-top:none;"> 
            <hr style="margin: 0;">
            <p style="margin: 0;">© Derechos Reservados UNAH 2013</p>
            <a href="#" title="esta es la matricula" style="margin: 0;">
                <p style="margin: 0;"> Dirección Ejecutiva de Gestión de Tecnología (DEGT)</p>
            </a>
        </footer>
    <!-- fin footer /////////////////////////// -->
    <!-- ////////////////////////////////////////// -->

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php

}//si no hay sesión
else {
    //se redirecciona
    header('location: ./');
}
?>