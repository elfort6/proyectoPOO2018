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

    <?php
        include("header.html");
    ?>

    <div class="container">

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modificar sección creada</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                   

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal" style="margin-bottom: 1em; background: #2980b9; color:white;">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

         <a class="btn btn-primary" href="crear_seccion.php" role="button">crear seccion</a>
         <a class="btn btn-primary" href="../docentes" role="button">plataforma docente</a>
        <?php
            include("footer.html");
        ?>

    </div>

    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>