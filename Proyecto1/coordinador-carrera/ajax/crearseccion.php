<?php

switch ($_GET["opcion"]) {
    case 1:
        //se establece una conexion a la base de datos
        include '../../php/conexion.php';
        //si se han enviado datos
        mysqli_query($conexion, 'INSERT INTO `secciones` (`seccion`, `asignatura`, `docente`, `cupos`, `dias`, `periodo`, `hora_inicial`, `hora_final`, `edificio`, `aula`) 
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
         "' . $_POST["aula"] . '")')
         or die('<p>Error al crear la seccion</p><br>' . mysqli_error($conexion));

    
        
        $registro = json_encode($_POST);
        echo $registro;
        break;
    case 2:
   
    break;
    
    case 3:
      
    break;
}
