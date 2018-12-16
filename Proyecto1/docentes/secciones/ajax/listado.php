<?php
    include("../../../class/class-conexion.php");
    $conexion=new Conexion();

    $_POST['codigoSeccion']="0800_is-311_2_2018";

    if(!isset($_POST)){
        echo('No se seleccionó ninguna sección');
        exit;
    }

    //obtener los estudiantes matriculados en la seccion
    $consulta='SELECT * FROM '.'`'.$_POST['codigoSeccion'].'`';
    $resultado=$conexion->ejecutarConsulta($consulta);

    while($fila=$resultado->fetch_assoc()){
        $datos[]=$fila;
    }

    
    //obtener el nombre y correo de los estudiantes
    for ($i=0; $i < sizeof($datos); $i++) { 
        $consulta='SELECT `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `email` FROM `estudiantes` WHERE `cuenta`="'.$datos[$i]['cuenta'].'"';
        $resultado=$conexion->ejecutarConsulta($consulta);
        $datosEstudiante=$resultado->fetch_assoc();
        $datos[$i]['nombre']=$datosEstudiante['primer_nombre'].' '.$datosEstudiante['segundo_nombre'].' '.
                             $datosEstudiante['primer_apellido'].' '.$datosEstudiante['segundo_apellido'];
        $datos[$i]['email']=$datosEstudiante['email'];
        $datos[$i]['correo_institucional']=$datos[$i]['cuenta'].'@unah.hn';
    }

    //devolver los valores en un json
    //var_dump($datos);
    echo json_encode($datos);

?>