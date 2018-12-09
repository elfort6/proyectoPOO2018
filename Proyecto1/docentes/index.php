<?php
session_start();
if ($_SESSION['lvl']==2 or $_SESSION['lvl']==3){
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/fontello.css" /><!-- para el icono del menu -->
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery-3.3.1.js"></script>

    <style>

        .curso{
            height: 250px;
            margin-top: 16px;
            margin-bottom: 16px;
            background-color: azure;
            border-radius: 10px;
        }

        .perfil-maestro{
            border: 1px solid rgb(231, 231, 231);
            border-radius: 10px; 
        }


    </style>

</head>

<body>

    <div class="container-fluid">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home-maestros.html">

                        <img src="../img/logo-unah.png" alt="la imagen se mamo" width="110" height="60">

                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto" id="enlaces-menu">
                            <li class="nav-item"><a class="nav-link" href="#">Secciones</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Subir Notas</a></li>
                            <?php if ($_SESSION['lvl'] == 3) {
                                ?>
                            <li class="nav-item"><a class="nav-link" href="../coordinador-carrera">Cordinador</a></li>
                            <?php } ?>
                        </ul>


                        <div class="dropdown" style="margin-left:0; ">
                            <button type="button" class="btn dropdown-toggle perfil" data-toggle="dropdown" style="box-shadow:none;">
                                <img src="../img/perfil-maestro.jpg" class="rounded-circle foto-perfil " width="50px" alt="Cinque Terre">
                                <span class="usu"><?php echo($_SESSION['name'])?></span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="#">Configuraciones</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../php/cerrar_sesion.php">salir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>

    <div class="container-fluid my-5" id="contenido-principal">

        <div class="">
            <div class="container forma03-encabezado perfil-maestro">
                <h4>Perfil </h4>
                <div class="row my-3 my-md-4">
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <a href="#"><img src="../img/perfil-maestro.jpg" alt="No Perfil"></a>
                            </div>
                            <div class="col-12 col-md-8">
                                <p>
                                    Nombre: <?php echo($_SESSION['name'])?>
                                </p>
                                <p>
                                    Código de acceso: M110-203654124
                                </p>
                                <p>
                                    Grado: INGENIERO EN SISTEMAS
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <p>Centro: Ciudad Universitaria</p>
                        <p>Contrato: Por hora</p>
                    </div>
                </div>
            </div>


            <!-- Cursos -->
            <div class="container">

                <br>
                <div class="">
                    <h3 style="color: brown">Cursos Impartidos Actualmente:</h3>
                    <hr>
                </div>

                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">MM-110</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title pricing-card-title">POO</h3>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Sección: 1100</li>
                                <li>Días: LuMaMiJuVi</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Ver Curso</button>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">MM-110</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title pricing-card-title">Estudios De La Mujer</h3>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Sección: 1100</li>
                                <li>Días: LuMaMiJuVi</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Ver Curso</button>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">MM-110</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title pricing-card-title">Sistemas Operativos</h3>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Sección: 1100</li>
                                <li>Días: LuMaMiJuVi</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Ver Curso</button>
                        </div>
                    </div>
                </div>
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


    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
<?php
}
else{
    header ('location: ../');
}
?>