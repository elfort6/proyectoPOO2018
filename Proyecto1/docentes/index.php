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
        include("header.php");
    ?>

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


    <?php
        include("footer.html");
    ?>

    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
<?php
} else {
    header('location: ../');
}
