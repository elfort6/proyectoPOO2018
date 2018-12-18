<?php
session_start();
include("../class/class-conexion.php");
 $conexion=new Conexion();
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
                        Carrera: <?php
                                                include("../class/class-sesion.php");
                                                $consulta='SELECT `nombre` FROM `ofertaacademica` WHERE  carrera="'.$_SESSION['carrera'].'"';
                                                $resultado=mysqli_query(sesion::conexion(), $consulta);
                                                 $fila=mysqli_fetch_row($resultado);
                                                echo($fila[0]);
                                                 ?>
                    </p>
                </div>
                <div class="col-md-4">

                    <p>Centro: Ciudad Universitaria</p>
                    <p>Año: null</p>
                    <p>Indice Global: <?php 
                                        $resultado=$conexion->ejecutarConsulta('SELECT `uv`,`calificacion` FROM '.'`'.'ha'.$_SESSION['cuenta'].'`'.'');
                                        $suv=0;
                                        $note=0;
                                        while( $datos=$resultado->fetch_assoc()) 
                                        { 
                                            $suv = ($suv +$datos['uv']);
                                            $note= ($note+$datos['uv']*$datos['calificacion']);
                                        }

                                        if($suv!=0){ 
                                        echo($note/$suv);
                                        }else{echo(0);}
                                       ?>
                    </p>
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
                <?php
                $resultado=$conexion->ejecutarConsulta('SELECT * FROM '.'`'.'ha'.$_SESSION['cuenta'].'`'.'');

                while( $datos=$resultado->fetch_assoc()) 
                { 
                  $codigo=$datos['codigo'];
                  $asignatura=$datos['asignatura'];
                  $uv=$datos['uv'];
                  $seccion=$datos['seccion'];
                  $anio=$datos['anio'];
                  $periodo=$datos['periodo'];
                  $calificacion=$datos['calificacion'];
                  $observacion=$datos['observacion'];
                  if($calificacion<65){ 
                  echo('<tr class="table-danger">
                  <td>'.$codigo.'</td>
                  <td>'.$asignatura.'</td>
                  <td>'.$uv.'</td>
                  <td>'.$anio.'</td>
                  <td>'.$seccion.'</td>
                  <td>'.$periodo.'</td>
                  <td>'.$calificacion.'</td>
                  <td>'.$observacion.'</td>
                  </tr>
                  
                  ');
                   }else{  
                    echo('<tr>
                    <td>'.$codigo.'</td>
                    <td>'.$asignatura.'</td>
                    <td>'.$uv.'</td>
                    <td>'.$anio.'</td>
                    <td>'.$seccion.'</td>
                    <td>'.$periodo.'</td>
                    <td>'.$calificacion.'</td>
                    <td>'.$observacion.'</td>
                    </tr>
                    
                    ');


                   }


                  }

                ?>

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