<?php
session_start();
if ($_SESSION['lvl']==2 or $_SESSION['lvl']==3) {
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Principal</title>

    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="css/docente.css">

</head>

<body>

    <?php
        include("header.php"); ?>

    <div class="container-fluid my-5" id="contenido-principal">

        <div class="container forma03-encabezado">
            <div class="container-fluid perfil-maestro">
                <h4 class="mx-2 my-2">Perfil </h4>
                <div class="row my-3 my-md-4">
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <img src="../img/perfil-maestro.jpg" alt="No Perfil">
                            </div>
                            <div class="col-12 col-md-8">
                                <p>Nombre: <span id="nombre"><?php echo $_SESSION['name'] ?></span></p>
                                <p> Fecha de nacimiento: <span id="fecha-nacimiento"></span></p>
                                <p> Grado: <span id="grado"></span></p>
                                <p>Carrera: <span id="carrera"><?php echo $_SESSION['carrera'] ?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <p>Número de acceso: <span id="n_empleado"><?php echo $_SESSION['cuenta'] ?></span></p>
                        <p>Correo: <span id="correo"></span> </p>
                        <p>Centro: Ciudad Universitaria</p>
                        <p>Contrato: <span id="contrato"></span></p>
                    </div>
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

            <div class="card-deck mb-3 text-center" id="secciones">
            </div>
            
        </div>

    </div>


    <?php
        include("footer.html"); ?>

    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
</body>

</html>
<?php
} else {
            header('location: ../');
        }
