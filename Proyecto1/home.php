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

    <div class="container-fluid">
        <header>
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
                        <ul class="navbar-nav mr-auto" id="enlaces-menu">
                            <li class="nav-item"><a class="nav-link" href="matricula.html">Matricula</a></li>
                            <li class="nav-item"><a class="nav-link" href="solicitudes.php">solicitudes</a></li>
                            <li class="nav-item"><a class="nav-link" href="historial.php">Historial Academico</a></li>

                        </ul>


                        <div class="dropdown" style="margin-left:0; ">
                            <button type="button" class="btn dropdown-toggle perfil" data-toggle="dropdown" style="box-shadow:none;">
                                <img src="img/foto.jpg" class="rounded-circle foto-perfil " width="50px" alt="Cinque Terre">
                                <?php print $_SESSION['name']; ?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="#">Configuraciones</a>

                                <a class="dropdown-item" href="#">Correo Institucional</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="cerrar_sesion.php">salir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>


    <article style="text-align: center;">
        <h1>¡Bienvenido <?php print $_SESSION['name']; ?>!</h1>
    </article>



    <hr>

    <div class="container" id="CONTENIDO">
        <!-- Forma 03 -->
        <div class="container-fluid forma03-encabezado">
            <h4>Forma 03 Matrícula </h4>
            <div class="row my-3 my-md-4">
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <a href="#"><img src="img/foto.jpg" alt="No Perfil"></a>
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
        </div>

        <!-- Tabla matricula Forma 03 -->
        <div class="container-fluid forma03-tabla">
            <div class="text-center">
                <div class=" encabezado">
                    Clases Matriculadas
                </div>
            </div>

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
                            <td>MM110</td>
                            <td>Matemática 1</td>
                            <td>0700</td>
                            <td>0700</td>
                            <td>0800</td>
                            <td>LuMaMiJuVi</td>
                            <td>F1</td>
                            <td>404</td>
                            <td>5</td>
                            <td></td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>MM111</td>
                            <td>Geometría y Trigonometría</td>
                            <td>1400</td>
                            <td>1400</td>
                            <td>1500</td>
                            <td>LuMaMiJuVi</td>
                            <td>D1</td>
                            <td>303</td>
                            <td>5</td>
                            <td></td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>MM202</td>
                            <td>Cálculo 2</td>
                            <td>1700</td>
                            <td>1700</td>
                            <td>1800</td>
                            <td>LuMaMiJuVi</td>
                            <td>F1</td>
                            <td>103</td>
                            <td>5</td>
                            <td></td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Fin tabla 03/////// -->

        <!-- Laboratorios Matriculados -->
        <div class="container-fluid forma03-tabla my-5">
            <div class="text-center">
                <div class=" encabezado">
                    Laboratorios Matriculados
                </div>
            </div>

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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MM111</td>
                            <td>Geometría y Trigonometría</td>
                            <td>1400</td>
                            <td>1400</td>
                            <td>1500</td>
                            <td>LuMaMiJuVi</td>
                            <td>5</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>MM202</td>
                            <td>Cálculo 2</td>
                            <td>1700</td>
                            <td>1700</td>
                            <td>1800</td>
                            <td>LuMaMiJuVi</td>
                            <td>5</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
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

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#enlaces-menu a").click(function() {

                var url = $(this).attr("href");
                //alert(url);

                $("#CONTENIDO").load(url + " #contenido-pagina");

                return false;
            });
        });
    </script>

</body>

</html>
<?php
}//si no hay sesión
else {
    //se redirecciona
    header('location: ./');
}
