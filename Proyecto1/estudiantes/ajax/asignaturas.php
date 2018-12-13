<?php
    session_start();
    include("../../class/class-sesion.php");

    $consulta='SELECT `asignatura`,`codigo` FROM pe' . $_SESSION["carrera"] .'  WHERE codigo like "'.$_POST["area"].'%"';
    //echo($consulta);
    $resultado=mysqli_query(sesion::conexion(),$consulta);

    $tope=mysqli_num_rows($resultado);

    if($tope==0){
        echo('');
        exit;
    }else{
        $formato="{";
        for($i=0;$i<$tope;$i++){

            $fila=mysqli_fetch_row($resultado);

            $formato.='"'.$i.'":{"nombre":"'.$fila[0].'","codigo":"'.$fila[1].'"},';
        }
    }

    $formato.='"total":"'.$tope.'"}';

    echo $formato;

?>