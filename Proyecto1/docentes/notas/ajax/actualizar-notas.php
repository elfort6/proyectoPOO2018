<?php
    include("../../../class/class-conexion.php");
    $conexion=new Conexion();

    //for actualizar datos
     for ($i=1; $i < (count($_POST['item'])+1) ; $i++) { 
        $conexion->ejecutarConsulta('UPDATE '.'`'.$_POST['codigoSeccion'].'`'.' SET `nota`="'.$_POST['item'][$i]['nota'].'" WHERE `cuenta`="'.$_POST['item'][$i]['cuenta'].'"')
        or die('<p>Error al registrar</p><br>' . mysqli_error($conexion));
    }
    
    echo json_encode($_POST);
?>