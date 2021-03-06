<?php

	
require_once '../../../Class/excel/PHPExcel.php';
$objPHPExcel = new PHPExcel();

$objPHPExcel->getProperties()
        ->setCreator("unah")
        ->setLastModifiedBy("unah")
        ->setTitle("Excel en PHP")
        ->setSubject("Documento de prueba")
        ->setDescription("Documento generado con PHPExcel")
        ->setKeywords("excel phpexcel php")
        ->setCategory("Ejemplos");
		
		
	$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle('Hoja 1');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'nombre');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'nota');

$objPHPExcel->getActiveSheet()->setCellValue('A1', 'numero de cuenta');
/////////////////////////////////////////codigo christopher////////////////////////////////////
include("../../../class/class-conexion.php");
    $conexion=new Conexion();

    //$_POST['codigoSeccion']="0800_is-311_2_2018";

    //obtener los estudiantes matriculados en la seccion
    $consulta='SELECT * FROM '.'`'.$_GET['seccion'].'`';
    $resultado=$conexion->ejecutarConsulta($consulta);

    

    while($fila=$resultado->fetch_assoc()){
        $datos[]=$fila;
    }
     
    if(!isset($datos)){
    }else{
    
    //obtener el nombre y correo de los estudiantes
    for ($i=0; $i < sizeof($datos); $i++) { 
        $consulta='SELECT `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `email` FROM `estudiantes` WHERE `cuenta`="'.$datos[$i]['cuenta'].'"';
        $resultado=$conexion->ejecutarConsulta($consulta);
        $datosEstudiante=$resultado->fetch_assoc();
        $datos[$i]['nombre']=$datosEstudiante['primer_nombre'].' '.$datosEstudiante['segundo_nombre'].' '.
                             $datosEstudiante['primer_apellido'].' '.$datosEstudiante['segundo_apellido'];
        $datos[$i]['email']=$datosEstudiante['email'];
        $datos[$i]['correo_institucional']=$datos[$i]['cuenta'].'@unah.hn';
        
       $objPHPExcel->getActiveSheet()->setCellValue('B'.($i+2).'', ''.$datos[$i]['nombre'].'');
       $objPHPExcel->getActiveSheet()->setCellValue('C'.($i+2).'', ''.$datos[$i]['nota'].'');
       $objPHPExcel->getActiveSheet()->setCellValue('A'.($i+2).'', ''.$datos[$i]['cuenta'].'');

    }


}

////////////////////////////////////////////////////////////////////////////////////////////////
	

header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header('Content-Disposition: attachment;filename="Excel.xlsx"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
?>