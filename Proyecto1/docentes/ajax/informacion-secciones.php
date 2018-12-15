<?php
    session_start();

    include("../../class/class-conexion.php");

    $conexion=new Conexion();

    $consulta='SELECT `seccion`, `asignatura`, `dias`, `hora_inicial`, `hora_final`, `edificio`, `aula`, `codigosec` FROM `secciones` WHERE `docente`="'.$_SESSION['cuenta'].'"';

    $resultado=$conexion->ejecutarConsulta($consulta);

    $tope=mysqli_num_rows($resultado);

    if($tope==0){
        echo('');
        exit;
    }else{
        $formato="{";
        for($i=0;$i<$tope;$i++){

            $fila=$conexion->obtenerFila($resultado);

            $consulta='SELECT `nombre` FROM `asignaturas` WHERE `codigo`="'.$fila[1].'"';
            $resultado2=$conexion->ejecutarConsulta($consulta);
            $fila2=$conexion->obtenerFila($resultado2);

            $formato.='"'.$i.'":{"seccion":"'.$fila[0].'","asignatura":"'.$fila[1].'","nombre":"'.$fila2[0].'","dias":"'.$fila[2].'","hi":"'.$fila[3].'","hf":"'.$fila[4].'","edificio":"'.$fila[5].'","aula":"'.$fila[6].'","codigosec":"'.$fila[7].'"},';
        }
    }

    $formato.='"total":"'.$tope.'"}';

    echo $formato;

?>