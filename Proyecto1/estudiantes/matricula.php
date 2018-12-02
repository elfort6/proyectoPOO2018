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
    <link rel="stylesheet" href="css/fontello.css" /><!-- para el icono del menu -->
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
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
                        <select class="form-control" id="sel1">
                            <option>Matemáticas</option>
                            <option>Ingenieria en Sistemas</option>
                            <option>Sociología</option>
                            <option>Materia Condensada</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="sel2" class="encabezado-tabla my-2">Asignatura:</label>
                        <select class="form-control" id="sel2">
                            <option>POO</option>
                            <option>Ingenieria en Sistemas</option>
                            <option>Sistemas Operativos</option>
                            <option>Progra 2</option>
                            <option>Estudios de la mujer</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="sel3" class="encabezado-tabla my-2">Sección:</label>
                        <select class="form-control" id="sel3">
                            <option>10:00 Guevara</option>
                            <option>8:00 Hilda</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-danger" style="margin-bottom: 1em;">Matricular Asignatura</button>
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
                    <tbody>
                        <tr>
                            <td>MM110</td>
                            <td>Matemática 1</td>
                            <td>0700</td>
                            <td>0700</td>
                            <td>0800</td>
                            <td>LuMaMiJuVi</td>
                            <td>5</td>
                            <td>1</td>
                            <td><button type="button" class="btn cancela" style="padding: 1px; background:none;">Cancelar</button></td>
                        </tr>
                        <tr>
                            <td>MM111</td>
                            <td>Geometría y Trigonometría</td>
                            <td>1400</td>
                            <td>1400</td>
                            <td>1500</td>
                            <td>LuMaMiJuVi</td>
                            <td>5</td>
                            <td>1</td>
                            <td><button type="button" class="btn" style="padding: 1px; background:none;">Cancelar</button></td>
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
                            <td><button type="button" class="btn" style="padding: 1px; background:none;">Cancelar</button></td>
                        </tr>
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
                            <td><button type="button" class="btn" style="padding: 1px;background:none;">Cancelar</button></td>
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
                            <td><button type="button" class="btn" style="padding: 1px; background:none;">Cancelar</button></td>
                        </tr>
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
                            <td><button type="button" class="btn" style="padding: 1px; background:none;">Cancelar</button></td>
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
                            <td><button type="button" class="btn" style="padding: 1px; background:none;">Cancelar</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
