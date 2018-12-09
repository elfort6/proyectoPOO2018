<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css">

</head>

<style>


</style>

<body>

    <header>
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="../img/logo-unah.png" alt="">
            <h2>Coordinador</h2>
            <a href="../php/cerrar_sesion.php">Cerrar sesión</a>
        </div>
    </header>

    <div class="container">

        <div class="container">
            <div class="col-12 text-center my-3">
                <a class="btn btn-primary" href="crear_seccion.php" role="button">Crear Sección</a>
            </div>
            <div class="col-12 text-center my-3">
            <a class="btn btn-primary" href="../docentes" role="button">Plataforma Docente</a>
            </div>
        </div>
        <br>
        <br>
        

        <?php
            include("footer.html");
        ?>

    </div>

    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>