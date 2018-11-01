<?php
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
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

    <!-- Elvin /////////////// -->
    <div class="container-fluid">
        <header >
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home.php">
                    
                    <img src="img/logo-unah.png" alt="la imagen se mamo" width="110" height="60">
                    
                    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="matricula.php">Matricula</a></li>
                        <li class="nav-item"><a class="nav-link" href="solicitudes.php">solicitudes</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#">Historial Academico</a></li>
                        
                    </ul>
                    

                        <div class="dropdown" style="margin-left:0; ">
                            <button type="button" class="btn dropdown-toggle perfil" data-toggle="dropdown" >
                                <img src="img/foto.jpg" class="rounded-circle foto-perfil " width="50px" alt="Cinque Terre">
                                <?php print $_SESSION['name'];?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             
                             <a class="dropdown-item" href="#">configuraciones</a>
                             
                             <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="cerrar_sesion.php">salir</a>
          
                             </div>
                        </div>
                    
                </div>
                </div>
            </nav>
        </header>
    </div>
    <!-- fin-Elvin//////////// -->
    
    <br>
        <br>
        <br>
        
    
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

        <br>
        <br>
        <br>
        <br>
       
    <!-- footer /////////////////////////////// -->
    <footer class="text-center" style="width: 100%;position: relative;background: none;border-top:none;"> 
            <hr style="margin: 0;">
            <p style="margin: 0;">© Derechos Reservados UNAH 2013</p>
            <a href="#" title="esta es la matricula" style="margin: 0;">
                <p style="margin: 0;"> Dirección Ejecutiva de Gestión de Tecnología (DEGT)</p>
            </a>
        </footer>
    <!-- fin footer /////////////////////////// -->
    <!-- ////////////////////////////////////////// -->

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php
}//si no hay sesión
else{
    //se redirecciona
    header ('location: ./');
}
?>