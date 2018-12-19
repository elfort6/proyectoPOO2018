<?php
    session_start();
    include("../../class/class-conexion.php");

     $conexion=new Conexion();

    $resultado=$conexion->ejecutarConsulta('SELECT * FROM '.'`'.$_Get['tabla'].'`'.'');

    while( $datos=$resultado->fetch_assoc()) 
{ 
    
    if( $resultado=($conexion->ejecutarConsulta('SELECT * FROM `asignaturas` WHERE `codigo`="'.$datos['codigo'].'"'))->fetch_assoc()){

    }else{
        $d = explode("-",$datos['codigo']);

        $conexion->ejecutarConsulta('INSERT INTO `asignaturas`(`codigo`, `nombre`, `carrera`, `uv`) 
        VALUES (
        "'.$datos['codigo'].'",
        "'.$datos['asignatura'].'",
        "'.$d[0].'",
        "'.$datos['uv'].'"
        )');

    }
}


?>