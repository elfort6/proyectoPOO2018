<?php
    include("../../../class/class-conexion.php");

    //$_POST['codigoSeccion']="0800_IS-311_2_2018";

    if(!isset($_POST)){
        echo('No se seleccionó ninguna sección');
        exit;
    }
    
    $conexion=new Conexion();

    $consulta='SELECT `seccion`, `asignatura`, `cupos`, `dias`, `hora_inicial`, `hora_final`, `edificio`, `aula`, `codigosec` FROM `secciones` WHERE `codigosec`="'.$_POST['codigoSeccion'].'"';

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

            $formato.='"'.$i.'":{"seccion":"'.$fila[0].
                '","asignatura":"'.$fila[1].
                '","nombre":"'.$fila2[0].
                '","cupos":"'.$fila[2].
                '","dias":"'.$fila[3].
                '","hi":"'.$fila[4].
                '","hf":"'.$fila[5].
                '","edificio":"'.$fila[6].
                '","aula":"'.$fila[7].
                '","codigosec":"'.$fila[8].
                '"},';
        }
    }

    $formato.='"total":"'.$tope.'"}';

    echo $formato;

?>