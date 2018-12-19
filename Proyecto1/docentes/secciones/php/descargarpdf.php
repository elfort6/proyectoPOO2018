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
?>