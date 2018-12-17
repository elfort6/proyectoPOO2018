<?php
    session_start();
    include("../../class/class-conexion.php");

     $conexion=new Conexion();
    $conexion->ejecutarConsulta('DELETE FROM '.'`'.'f3'.$_SESSION['cuenta'].'`'.' WHERE `codigo`="'.$_POST['codigo'].'"');
    $conexion->ejecutarConsulta('DELETE FROM '.'`'.$_POST['tabla'].'`'.' WHERE `cuenta`="'.$_SESSION['cuenta'].'"');
    echo ("cancelar bien");

?>