<?php
    session_start();
    include("../../class/class-sesion.php");

    $consulta='SELECT `areas` FROM `ofertaacademica` WHERE  carrera = "'.$_SESSION['carrera'].'"';

    $resultado=mysqli_query(sesion::conexion(),$consulta);
    $datos=$resultado->fetch_assoc();
    $area = explode(",",$datos["areas"]);
    $n=count($area);
    $x=0;
    
    if($n==0){
        echo('');
        exit;
    }else{
        $formato="{";
        for($i=0;$i<$n;$i++){
            $consulta2='SELECT `nombre` FROM `areas` WHERE  clave = "'.$area[$i].'"';
            $resultado2=mysqli_query(sesion::conexion(),$consulta2);
            $datos2=$resultado2->fetch_assoc();
            if(isset($datos2["nombre"])){
            $formato.='"'.$i.'":{"nombre":"'.$datos2["nombre"].'","clave":"'.$area[$i].'"},';
            $x = $x+1;   
            }
        }
    }

    $formato.='"total":"'.$x.'"}';

    echo $formato;

?>