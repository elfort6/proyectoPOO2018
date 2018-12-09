<?php
session_start();
if ($_SESSION['lvl']==1){
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Historial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <?php
        include("header.php");
    ?>

    <div id="contenido-pagina">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#"><img src="../img/foto.jpg" alt="Cinque Terre" width="150px"></a>
                </div>
                <div class="col-md-5">
                    <p>
                        Nombre: <?php echo($_SESSION['name'])?>
                    </p>
                    <p>
                        Cuenta: <?php echo($_SESSION['cuenta'])?>
                    </p>
                    <p>
                        Carrera: INGENIERIA EN SISTEMAS
                    </p>
                </div>
                <div class="col-md-4">

                    <p>Centro: Tangamandapio</p>
                    <p>Año: 2027</p>
                    <p>Indice Global: n/a</p>
                    <p>Indice de periodo: n/a</p>
                </div>
            </div>

        </div>

        <div class="container">
            <table class="table table-responsive-lg">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Asignatura</th>
                        <th scope="col">uv</th>
                        <th scope="col">Año</th>
                        <th scope="col">Seccion</th>
                        <th scope="col">Periodo</th>
                        <th scope="col">Calificacion</th>
                        <th scope="col">OBS</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>SC101</td>
                        <td>Sociologia</td>
                        <td>4</td>
                        <td>1300</td>
                        <td>2016</td>
                        <td>1</td>
                        <td>97</td>
                        <td>APR</td>
                    </tr>
                    <tr class="table-danger">
                        <td>MM110</td>
                        <td>Matematica 1</td>
                        <td>5</td>
                        <td>1100</td>
                        <td>2016</td>
                        <td>1</td>
                        <td>64.9999</td>
                        <td>RPB</td>
                    </tr>
                    <tr>
                        <td>SC101</td>
                        <td>Sociologia</td>
                        <td>4</td>
                        <td>1300</td>
                        <td>2016</td>
                        <td>1</td>
                        <td>97</td>
                        <td>APR</td>
                    </tr>
                    <tr>
                        <td>SC101</td>
                        <td>Sociologia</td>
                        <td>4</td>
                        <td>1300</td>
                        <td>2016</td>
                        <td>1</td>
                        <td>97</td>
                        <td>APR</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <?php
        include("footer.html");
    ?>

    <script src="../js/jquery-3.3.1.js"></script>
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