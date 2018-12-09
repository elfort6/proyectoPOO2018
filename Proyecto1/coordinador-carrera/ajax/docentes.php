<?php
    session_start();
    include("../../class/class-sesion.php");

    $consulta='SELECT `primer-nombre`, `primer-apellido`, `n_empleado` FROM `docentes` WHERE `facultad`="'.$_SESSION['carrera'].'"';

    $resultado=mysqli_query(sesion::conexion(),$consulta);

    $tope=mysqli_num_rows($resultado);

    if($tope==0){
        echo('');
        exit;
    }else{
        $formato="{";
        for($i=0;$i<$tope;$i++){

            $fila=mysqli_fetch_row($resultado);

            $formato.='"'.$i.'":{"nombre":"'.$fila[0].' '.$fila[1].'","n_empleado":"'.$fila[2].'"},';
        }
    }

    $formato.='"total":"'.$tope.'"}';

    echo $formato;

?>