<?php
 //Agregamos la libreria FPDF
 require('../../../Class/fpdf/fpdf.php');

 $pdf = new FPDF(); //Creamos un objeto de la librería
 $pdf->AddPage(); //Agregamos una Pagina
 $pdf->SetFont('Arial','B',16); //Establecemos tipo de fuente, negrita y tamaño 16
//Agregamos texto en una celda de 40px ancho y 10px de alto, Con Borde, Sin salto de linea y Alineada a la derecha
$pdf->SetXY(75,30); //Agregamos una Pagina
 $pdf->Cell(40,10,'Lista de alumnos seccion: '.$_GET['seccion'].'',0,1,'C'); 
 $pdf->Output(); //Mostramos el PDF creado

 //Agregamos la libreria FPDF
 require('../../../Class/fpdf/fpdf.php');

 $pdf = new FPDF(); //Creamos un objeto de la librería
 $pdf->AddPage(); //Agregamos una Pagina
 $pdf->SetFont('Arial','B',16); //Establecemos tipo de fuente, negrita y tamaño 16
//Agregamos texto en una celda de 40px ancho y 10px de alto, Con Borde, Sin salto de linea y Alineada a la derecha
$pdf->SetXY(75,30); //Agregamos una Pagina
 $pdf->Cell(40,10,'Lista de alumnos seccion: '.$_GET['seccion'].'',0,1,'C'); 
 $pdf->SetFont('Arial','B',11); //Establecemos tipo de fuente, negrita y tamaño 16
 $pdf->Cell(25,10,'numer cuenta  ',1,0,'C'); 
 $pdf->Cell(60,10,'nombre                  ',1,0,'C'); 
 $pdf->Cell(60,10,'correo personal         ',1,0,'C');  
 $pdf->Cell(60,10,'correo institucional    ',1,1,'C'); 
 $pdf->SetFont('Arial','',11); //Establecemos tipo de fuente, negrita y tamaño 16
/////////////////////////////////////////codigo christopher////////////////////////////////////
include("../../../class/class-conexion.php");
    $conexion=new Conexion();

    //$_POST['codigoSeccion']="0800_is-311_2_2018";

    //obtener los estudiantes matriculados en la seccion
    $consulta='SELECT * FROM '.'`'.$_GET['seccion'].'`';
    $resultado=$conexion->ejecutarConsulta($consulta);

    if(empty($resultado)){
        $datos['nombre']="No se encontraron registros.";
        $datos['email']="No se encontraron registros.";
        $datos['correo_institucional']="No se encontraron registros.";
        echo json_encode($datos);
        exit;
    }

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


        $pdf->Cell(25,10,''.$datos[$i]['cuenta'].'',1,0,'C'); 
        $pdf->Cell(60,10,''.$datos[$i]['nombre'].'',1,0,'C'); 
        $pdf->Cell(60,10,''.$datos[$i]['email'].'',1,0,'C');  
        $pdf->Cell(60,10,''.$datos[$i]['correo_institucional'].'',1,1,'C'); 
        

    }




////////////////////////////////////////////////////////////////////////////////////////////////



 $pdf->Output(); //Mostramos el PDF creado
?>