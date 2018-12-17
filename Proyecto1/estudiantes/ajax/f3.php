<?php
    session_start();
    include("../../class/class-conexion.php");

     $conexion=new Conexion();

    $resultado=$conexion->ejecutarConsulta('SELECT * FROM '.'`'.'f3'.$_SESSION['cuenta'].'`'.'');

    $datos1 = array();
    $x=0;

    while( $datos=$resultado->fetch_assoc()) 
{ 
    $codigo=$datos['codigo'];
    $asignatura=$datos['asignatura'];
    $seccion=$datos['seccion'];
    $hi=$datos['hi'];
    $hf=$datos['hf'];
    $dias=$datos['dias'];
    $edificio=$datos['edificio'];
    $aula =$datos['aula'];
    $uv=$datos['uv'];
    $periodo=$datos['periodo'];
    $anio=$datos['anio'];
    
    
    
    $x=$x+1;
    $datos1[] = array('codigo'=> $codigo, 'asignatura'=> $asignatura, 'seccion'=> $seccion, 'hi'=> $hi,
                        'hf'=> $hf, 'dias'=> $dias, 'edificio'=> $edificio,'aula'=> $aula,
                        'uv'=> $uv,'periodo'=> $periodo,'anio'=> $anio);

}
$dats1[] = array('total'=> $x);

    echo json_encode($datos1);

?>