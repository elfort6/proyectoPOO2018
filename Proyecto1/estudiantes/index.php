<?php
session_start();
if ($_SESSION['lvl']==1){
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Principal</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>


    <?php
        include("header.php");
    ?>


    <article style="text-align: center;">
        <h1>¡Bienvenido <span class="usu"><?php echo($_SESSION['name'])?></span>!</h1>
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
                            <img src="../perfiles-usuarios/perfil-numerocuenta.jpg" alt="No Perfil">
                        </div>
                        <div class="col-12 col-md-8">
                            <p>
                                Nombre: <?php echo($_SESSION['name'])?>
                            </p>
                            <p class="cue">
                                Cuenta: <?php echo($_SESSION['cuenta'])?>
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
                    <tbody class="f3main">
                       
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

    <?php
        include("footer.html");
    ?>
    <!-- ////////////////////////////////////////// -->

    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/f3.js"></script>

</body>

</html>
<?php
}
else{
    header ('location: ../');
}
?>