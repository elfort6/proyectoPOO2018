<?php
    session_start();
    include("../../class/class-sesion.php");

    $consulta='SELECT `nombre`,`codigo` FROM `asignaturas` WHERE  codigo LIKE "'.$_SESSION['carrera'].'%"';

    $resultado=mysqli_query(sesion::conexion(),$consulta);

    $tope=mysqli_num_rows($resultado);

    if($tope==0){
        echo('');
        exit;
    }else{
        $formato="{";
        for($i=0;$i<$tope;$i++){

            $fila=mysqli_fetch_row($resultado);

            $formato.='"'.$i.'":{"nombre":"'.$fila[0].'","clase":"'.$fila[1].'"},';
        }
    }

    $formato.='"total":"'.$tope.'"}';

    echo $formato;

?>