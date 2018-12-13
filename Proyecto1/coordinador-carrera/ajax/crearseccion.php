<?php

switch ($_GET["opcion"]) {
    case 1:
        //se establece una conexion a la base de datos
        include '../../php/conexion.php';
        //si se han enviado datos
        $cose=  '`'.$_POST["seccion"].'_'.$_POST["asignatura"].'_'.$_POST["periodo"].'_'.$_POST["anio"].'`';
        $cose2=  $_POST["seccion"].'_'.$_POST["asignatura"].'_'.$_POST["periodo"].'_'.$_POST["anio"];
        mysqli_query($conexion, 'INSERT INTO `secciones` (`seccion`, `asignatura`, `docente`, `cupos`, `dias`, `periodo`, `hora_inicial`, `hora_final`, `edificio`, `aula`,`anio`,`codigosec` ) 
        VALUES 
        ( "' . $_POST["seccion"] . '",
         "' . $_POST["asignatura"] . '",
         "' . $_POST["docente"] . '",
         "' . $_POST["cupos"] . '",
         "' . $_POST["dias"] . '",
         "' . $_POST["periodo"] . '",
         "' . $_POST["hi"] . '",
         "' . $_POST["hf"] . '",
         "' . $_POST["eficicio"] . '",
         "' . $_POST["aula"] . '",
         "' . $_POST["anio"] . '",
         "' . $cose2. '")')
         or die('<p>Error al crear la seccion</p><br>' . mysqli_error($conexion));

            $creah = mysqli_query($conexion, 'CREATE TABLE '.$cose.' ( `cuenta` TEXT NOT NULL , `nota` INT NOT NULL , UNIQUE (`cuenta`(20))) ENGINE = MyISAM;')
            or die('<p>Error al registrar</p><br>' . mysqli_error($conexion));

        
        $registro = json_encode($_POST);
        echo $registro;
        break;
    case 2:
   
    break;
    
    case 3:
      
    break;
}
