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

    <div class="container" id="contenido-pagina">
        <!-- Matrícula/////////////////// -->
        <!-- adicionar////// -->
        <div class="container-fluid border my-5" style="padding: 5px;">
            <h3 style="color: rgb(131, 2, 2);">Matrícula</h3>
            <div class="row">
                <div class="col-12">
                    <p>Adicionar Asignatura</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="sel1" class="encabezado-tabla my-2">Departamento:</label>
                        <select class="form-control area" id="sel1">
                            
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="sel2" class="encabezado-tabla my-2">Asignatura:</label>
                        <select class="form-control" id="sel2">
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="sel3" class="encabezado-tabla my-2">Sección:</label>
                        <select class="form-control" id="sel3">
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="button" id="boton-matricular" class="btn btn-danger" style="margin-bottom: 1em;">Matricular Asignatura</button>
                </div>
            </div>
        </div>


        <!-- Asignaturas añadidas -->
        <div class="container-fluid forma03-tabla">
            <div class="text-center">
                <div class=" encabezado">
                    Asignaturas Pre-Matriculadas
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
                            <th>Cancelar</th>
                            <!-- <th>Semana</th> -->
                        </tr>
                    </thead>
                    <tbody class="f3">
                        
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Asignaturas en lista de espera -->
        <div class="container-fluid forma03-tabla my-5">
            <div class="text-center">
                <div class=" encabezado">
                    Asignaturas En Lista De Espera
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
                            <th>Cancelar</th>
                            <!-- <th>Semana</th> -->
                        </tr>
                    </thead>
                    <tbody class="">
                        
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Laboratorios Pre Matriculados -->
        <div class="container-fluid forma03-tabla my-5">
            <div class="text-center">
                <div class=" encabezado">
                    Laboratorios Pre-Matriculados
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
                            <th>Cancelar</th>
                            <!-- <th>Semana</th> -->
                        </tr>
                    </thead>
                    <tbody class="f3">
                        
                    </tbody>
                </table>
            </div>
        </div>

        <?php
        include("footer.html");
        ?>

    </div>

    <script src="../js/jquery-3.3.1.js"></script>
    <script src="js/estudiantes.js"></script>
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