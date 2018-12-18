<?php
    session_start();
    include("../../class/class-conexion.php");
    $conexion=new Conexion();
    $resultado=($conexion->ejecutarConsulta('SELECT * FROM `configuracion`'))->fetch_assoc();
    echo(json_encode($resultado));

?> 