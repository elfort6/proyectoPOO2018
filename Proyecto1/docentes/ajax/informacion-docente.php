<?php
    session_start();
    include("../../class/class-sesion.php");

    $consulta='SELECT `fecha-nacimiento`, `nivel_academico`, `t_contrato`, `n_identidad`, `email` FROM `docentes` WHERE `n_empleado`="'.$_SESSION['cuenta'].'"';

    $resultado=mysqli_query(sesion::conexion(),$consulta);

    $tope=mysqli_num_rows($resultado);

    if($tope==0){
        echo('');
        exit;
    }else{
        $formato="{";
        for($i=0;$i<$tope;$i++){

            $fila=mysqli_fetch_row($resultado);

            $formato.='"'.$i.'":{"fecha":"'.$fila[0].'","grado":"'.$fila[1].'","contrato":"'.$fila[2].'","id":"'.$fila[3].'","email":"'.$fila[4].'"},';
        }
    }

    $formato.='"total":"'.$tope.'"}';

    echo $formato;
?>