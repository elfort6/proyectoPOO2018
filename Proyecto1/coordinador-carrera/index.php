<?php
    session_start();
?>
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
        include("header.php");
    ?>

    <div class="container">
        <!-- Encabezado -->
        <h1>Carrera <?php
            include("../class/class-sesion.php");
            $consulta='SELECT `nombre` FROM `ofertaacademica` WHERE  carrera="'.$_SESSION['carrera'].'"';
            $resultado=mysqli_query(sesion::conexion(), $consulta);
            $fila=mysqli_fetch_row($resultado);
            echo($fila[0]);
        ?>
        </h1>

        <!-- Crear nueva seccion -->
        <!-- <h3 style="color: #0045fa;">Abrir nueva sección</h3> -->
        <div class="container-fluid border my-5" style="padding: 5px;">

            <?php
                include("formulario-seccion-nueva.php");
            ?>

        </div>

        <!-- Tabla de secciones creadas -->
        <div class="container-fluid forma03-tabla">
            <div class="text-center">
                <div class=" encabezado">
                    Secciones Creadas
                </div>
            </div>

            <div>
                <table class="table table-striped table-responsive-lg">
                    <thead>
                        <tr>
                            <th>Sección</th>
                            <th>Asignatura</th>
                            <th>Docente</th>
                            <th>Cupos</th>
                            <th>Dias</th>
                            <th>Periodo</th>
                            <th>Año</th>
                            <th>HI</th>
                            <th>HF</th>
                            <th>Edificio</th>
                            <th>Aula</th>
                            <th>Editar</th>
                            <!-- <th>Semana</th> -->
                        </tr>
                    </thead>
                    <tbody id="secciones-creadas">
                    </tbody>
                </table>
            </div>
        </div>

        <?php
            include("footer.html");
        ?>

    </div>

    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/coordinador.js"></script>
</body>

</html>