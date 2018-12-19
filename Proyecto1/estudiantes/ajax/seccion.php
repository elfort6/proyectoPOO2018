<?php
    session_start();
    include("../../class/class-sesion.php");

    $consulta='SELECT `seccion`,`codigosec`,`docente` FROM secciones  WHERE asignatura="'.$_POST["clase"].'"';

  
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
            $consultaest='select * from docentes where n_empleado="'.$fila[2].'"';
               $ejecución_de_la_consultadoce=mysqli_query(sesion::conexion(),$consultaest);
               $datosdoce=$ejecución_de_la_consultadoce->fetch_assoc();
               $info = $datosdoce['primer-nombre'].' '.$datosdoce['segundo-nombre'].' '.$datosdoce['primer-apellido'].' '.$datosdoce['segundo-apellido'];
   

            $formato.='"'.$i.'":{"nombre":"'.$fila[0].'--'.$info.'","codigo":"'.$fila[1].'"},';
        }
    }

    $formato.='"total":"'.$tope.'"}';

    echo $formato;

?>