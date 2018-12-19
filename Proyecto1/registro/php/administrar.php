<?php
    session_start();
    include("../../class/class-conexion.php");
    $conexion=new Conexion();

switch ($_GET["opcion"]) {
    case 1:
        $resultado=($conexion->ejecutarConsulta('SELECT * FROM `configuracion`'))->fetch_assoc();
        echo(json_encode($resultado));
        break;
    case 2:
    $conexion->ejecutarConsulta('UPDATE `configuracion` SET `estadomatricula` = '.$_GET["dato"].' WHERE 1' );
    echo("echo");
    
       break;
    case 3:
    $conexion->ejecutarConsulta('UPDATE `configuracion` SET `estadosubirnotas` = '.$_GET["dato"].' WHERE 1');
    echo("echo");
       break;
    case 4:
    echo("case 4");
       break;
}
?>