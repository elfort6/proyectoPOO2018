<?php
session_start();
//si hay una sesión
if (isset($_SESSION['name'])) {
    //se muestra el contenido de la página web
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div id="contenido-pagina">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#"><img src="img/foto.jpg" alt="Cinque Terre" width="150px"></a>
                </div>
                <div class="col-md-5">
                    <p>
                        Nombre: Nombre-Alumno
                    </p>
                    <p>
                        Cuenta: 203654124
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
</body>

</html>

<?php
}//si no hay sesión
else {
    //se redirecciona
    header('location: ./');
}
