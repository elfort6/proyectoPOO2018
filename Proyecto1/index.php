<?php
session_start();
//si hay una sesión
if (!isset($_SESSION['name'])) {
    //se muestra el contenido de la página web
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio Universidad Nacional Autónoma de Honduras</title>
    <link rel="icon" type="image/ico" href="img/favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/fontello.css" /><!-- para el icono del menu -->
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/fontawesome/all.css">


</head>

<style>
    .bloque-contenido {
        background-color: bisque;
    }

    .puntero {
        cursor: pointer;
        font-weight: bold;
    }

    .fondo-imagen {
        background-image: url('img/entrada.jpg');
    }

    .fondo-transparente {
        background-color: rgba(24, 24, 24, 0.65);
    }
</style>

<body>

    <?php
        include("header.html"); ?>

    <?php
        include("login.html"); ?>

    <?php
        include("contenido-principal.html"); ?>

    <?php
        include("footer.html"); ?>

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(".continuar-leyendo").click(function() {
            $("#texto-adicional").removeClass('d-none');
            $(".continuar-leyendo").addClass('d-none');
            $(".mostrar-menos").removeClass('d-none');
        });
        $(".mostrar-menos").click(function() {
            $("#texto-adicional").addClass('d-none');
            $(".continuar-leyendo").removeClass('d-none');
            $(".mostrar-menos").addClass('d-none');
        });


        //obtenemos la posición en la que se encuentra el botón
        var posicion_boton1 = $("#mision-vision").offset().top;

        $("#mision").click(function() {
            //hacemos scroll hasta el botón
            $("html, body").animate({
                scrollTop: posicion_boton1 + "px"
            });
        });

        //obtenemos la posición en la que se encuentra el botón
        var posicion_boton2 = $("#facultades").offset().top;

        $("#facu").click(function() {
            //hacemos scroll hasta el botón
            $("html, body").animate({
                scrollTop: posicion_boton2 + "px"
            });
        });

        //obtenemos la posición en la que se encuentra el botón
        var posicion_boton3 = $("#estudiantes").offset().top;

        $("#estudiante").click(function() {
            //hacemos scroll hasta el botón
            $("html, body").animate({
                scrollTop: posicion_boton3 + "px"
            });
        });

        //obtenemos la posición en la que se encuentra el botón
        var posicion_boton4 = $("#centros").offset().top;

        $("#regionales").click(function() {
            //hacemos scroll hasta el botón
            $("html, body").animate({
                scrollTop: posicion_boton4 + "px"
            });
        });

    </script>

</body>

</html>

<?php
}//si no hay sesión
else {
    if ($_SESSION['lvl']==1) {
        header('location: estudiantes/');
    } else {
        if ($_SESSION['lvl']==2) {
            header('location: docentes/');
        } else {
            if ($_SESSION['lvl']==3) {
                header('location: coordinador-carrera/');
            } else {
                if ($_SESSION['lvl']==4) {
                    header('location: registro/');
                } else {
                }
            }
        }
    }
}
