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
                            <th>HI</th>
                            <th>HF</th>
                            <th>Edificio</th>
                            <th>Aula</th>
                            <th>Cancelar</th>
                            <!-- <th>Semana</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0700</td>
                            <td>Matemática 1</td>
                            <td>0700</td>
                            <td>0700</td>
                            <td>LuMaMiJuVi</td>
                            <td>0800</td>
                            <td>F1</td>
                            <td>404</td>
                            <td>5</td>
                            <td>1</td>
                            <td><button type="button" class="btn" data-toggle="modal" style="padding: 1px; background:none;"
                                    data-target="#myModal">
                                    Editar
                                </button></td>
                        </tr>
                        <tr>
                            <td>0800</td>
                            <td>Geometría</td>
                            <td>1400</td>
                            <td>1400</td>
                            <td>LuMaMiJuVi</td>
                            <td>1500</td>
                            <td>D1</td>
                            <td>303</td>
                            <td>5</td>
                            <td>1</td>
                            <td><button type="button" class="btn" data-toggle="modal" style="padding: 1px; background:none;"
                                    data-target="#myModal">
                                    Editar
                                </button></td>
                        </tr>
                        <tr>
                            <td>0900</td>
                            <td>Cálculo 2</td>
                            <td>1700</td>
                            <td>1700</td>
                            <td>LuMaMiJuVi</td>
                            <td>1800</td>
                            <td>F1</td>
                            <td>103</td>
                            <td>5</td>
                            <td>1</td>
                            <td><button type="button" class="btn" data-toggle="modal" style="padding: 1px; background:none;"
                                    data-target="#myModal">
                                    Editar
                                </button></td>
                        </tr>
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