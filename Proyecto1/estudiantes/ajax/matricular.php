<?php
session_start();
include("../../class/class-conexion.php");

$conexion=new Conexion();

//consulta para registrar el estudiante en la seccion
$conexion->ejecutarConsulta('INSERT INTO '.'`'.$_POST['seccion'].'`'.'(`cuenta`, `nota`) VALUES ("'.$_SESSION['cuenta'].'","0")');

//consulta para obtener la informacion de las seccion
$resultado=$conexion->ejecutarConsulta('SELECT * FROM `secciones` WHERE `codigosec`="'.$_POST['seccion'].'"');
$datos=$resultado->fetch_assoc();

//consulta para encontrar el nombre de la seccion
$resultado=$conexion->ejecutarConsulta('SELECT `nombre`, `uv` FROM `asignaturas` WHERE `codigo`="'.$datos['asignatura'].'"');
$nombreseccion=$resultado->fetch_assoc();


//consula para registrar la seccion en la forma 03 del estudiante
$conexion->ejecutarConsulta(
    'INSERT INTO '.'`'.'f3'.$_SESSION['cuenta'].'`'.
    '(`codigo`, `asignatura`, `seccion`, `hi`, `hf`, `dias`, `edificio`, `aula`, `uv`, `obs`, `periodo`, `semana`) 
    VALUES ("'.$datos['asignatura'].'",
    "'.$nombreseccion['nombre'].'",
    "'.$datos['seccion'].'",
    "'.$datos['hora_inicial'].'",
    "'.$datos['hora_final'].'",
    "'.$datos['dias'].'",
    "'.$datos['edificio'].'",
    "'.$datos['aula'].'",
    "'.$nombreseccion['uv'].'",
    "",
    "'.$datos['periodo'].'",
    "")');
    
    echo("se registró todo.");

?>