<?php
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
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
                        <li class="nav-item"><a class="nav-link" href="matricula.php">Matricula</a></li>
                        <li class="nav-item"><a class="nav-link" href="facultades.html">solicitudes</a></li>
                        <li class="nav-item"><a class="nav-link" href="historial.php">Historial Academico</a></li>
                        
                    </ul>
                    

                        <div class="dropdown" style="margin-left:0; ">
                            <button type="button" class="btn dropdown-toggle perfil" data-toggle="dropdown" style="box-shadow:none;">
                                <img src="img/foto.jpg" class="rounded-circle foto-perfil " width="50px" alt="Cinque Terre">
                                <?php print $_SESSION['name'];?>
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
    <article style="text-align: center;">
    <h1>¡Bienvenido <?php print $_SESSION['name'];?>!</h1>
</article>
    
    

    <hr>

    <div class="container">

         <!-- Forma 03 -->
         <div class="container-fluid">
            <h4 style="padding: 0; margin: 0; color: #CC6600;">Forma 03 Matrícula </h4>
            <p>Clases Matriculadas</p>
            <div class="row my-3 my-md-4">
                <div class="col-12 col-md-6">

                    <div class="row">
                        <div class="col-12 col-md-3">
                            <a href="#"><img src="img/foto.jpg" width="90px" alt="Cinque Terre"></a>
                        </div>
                        <div class="col-12 col-md-8">
                            <p>
                                Nombre: Nombre-Alumno
                            </p>
                            <p>
                                Cuenta: 203654124
                            </p>
                            <p>
                                Carrera: INGENIERIA EN SISTEMAS
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">

                    <p>Centro: Tangamandapio</p>
                    <p>Año: 2027</p>
                </div>
            </div>

            <br>

            <!-- Tabla matricula Forma 03 -->
            <div class="row text-center">
                <div class="col-12 " style="width: 100%;color: white;background: #006699;">
                    Clases Matriculadas
                </div>
            </div>
            
            <!-- /////////////// -->
            <div>
                <table class="table table-striped table-responsive-lg">
                    <thead>
                        <tr>
                            <th>Cod.</th>
                            <th>Asignatura</th>
                            <th>Sección</th>
                            <th>HI</th>
                            <th>HF</th>
                            <th>Dias</th>
                            <th>Edificio</th>
                            <th>Aula</th>
                            <th>UV</th>
                            <th>OBS</th>
                            <th>Periodo</th>
                            <!-- <th>Semana</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Fin tabla 03/////// -->      
    
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
else{
    //se redirecciona
    header ('location: ./');
}
?>