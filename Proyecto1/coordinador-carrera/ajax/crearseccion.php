<?php
session_start();

switch ($_GET["opcion"]) {
    case 1:
        //se establece una conexion a la base de datos
        include '../../php/conexion.php';
        
        include("../../class/class-conexion.php");
        $conexion2=new Conexion();
        
        //si se han enviado datos
        $cose=  '`'.$_POST["seccion"].'_'.$_POST["asignatura"].'_'.$_POST["periodo"].'_'.$_POST["anio"].'`';
        $cose2=  $_POST["seccion"].'_'.$_POST["asignatura"].'_'.$_POST["periodo"].'_'.$_POST["anio"];
        

        if($valida1=($conexion2->ejecutarConsulta('SELECT * FROM `secciones`  WHERE `codigosec`="'.$cose2.'"'))->fetch_assoc())
        {
            mysqli_query($conexion, 'UPDATE `secciones` SET 
            `seccion`="' . $_POST["seccion"] . '",
            `asignatura`="' . $_POST["asignatura"] . '",
            `docente`="' . $_POST["docente"] . '",
            `cupos`="' . $_POST["cupos"] . '",
            `dias`="' . $_POST["dias"] . '",
            `periodo`="' . $_POST["periodo"] . '",
            `hora_inicial`="' . $_POST["hi"] . '",
            `hora_final`="' . $_POST["hf"] . '",
            `edificio`="' . $_POST["eficicio"] . '",
            `aula`="' . $_POST["aula"] . '",
            `anio`="' . $_POST["anio"] . '",
            `codigosec`="' . $cose2. '" 
            WHERE `codigosec`="'.$cose2.'"')
            or die('<p>Error al crear la seccion</p><br>' . mysqli_error($conexion));

                $creah = mysqli_query($conexion, 'CREATE TABLE '.$cose.' ( `cuenta` TEXT NOT NULL , `nota` INT NOT NULL , UNIQUE (`cuenta`(20))) ENGINE = MyISAM;')
                or die('<p>Error al registrar</p><br>' . mysqli_error($conexion));

        }else{
            mysqli_query($conexion, 'INSERT INTO `secciones` (`seccion`, `asignatura`, `docente`, `cupos`, `dias`, `periodo`, `hora_inicial`, `hora_final`, `edificio`, `aula`,`anio`,`codigosec` ) 
            VALUES 
            ( "' . $_POST["seccion"] . '",
            "' . $_POST["asignatura"] . '",
            "' . $_POST["docente"] . '",
            "' . $_POST["cupos"] . '",
            "' . $_POST["dias"] . '",
            "' . $_POST["periodo"] . '",
            "' . $_POST["hi"] . '",
            "' . $_POST["hf"] . '",
            "' . $_POST["eficicio"] . '",
            "' . $_POST["aula"] . '",
            "' . $_POST["anio"] . '",
            "' . $cose2. '")')
            or die('<p>Error al crear la seccion</p><br>' . mysqli_error($conexion));

                $creah = mysqli_query($conexion, 'CREATE TABLE '.$cose.' ( `cuenta` TEXT NOT NULL , `nota` INT NOT NULL , UNIQUE (`cuenta`(20))) ENGINE = MyISAM;')
                or die('<p>Error al registrar</p><br>' . mysqli_error($conexion));
        }
        $registro = json_encode($_POST);
        echo $registro;
        break;
    case 2:
        //se establece una conexion a la base de datos
        include("../../class/class-conexion.php");

        $conexion=new Conexion();
        $consulta='SELECT * FROM `secciones` WHERE `asignatura` like "'.$_SESSION['carrera'].'%"';
        $resultado=$conexion->ejecutarConsulta($consulta);
       
        $registros=array();
        $i=0;
        
        while($fila=$resultado->fetch_assoc()){
            //echo($fila['seccion']);
            $registros[$i]['seccion']=$fila['seccion'];

            $registros[$i]['asignatura']=$fila['asignatura'];
            //consultar el nombre de la clase
            $consulta='SELECT `nombre` FROM `asignaturas` WHERE `codigo`="'.$fila['asignatura'].'"';
            $resultado2=($conexion->ejecutarConsulta($consulta))->fetch_assoc();
            $nombre=$resultado2['nombre'];

            $registros[$i]['nombreasignatura']=$nombre;

            
            $registros[$i]['docente']=$fila['docente'];
            //consultar nombre de docente
            $consulta='SELECT `primer-nombre`, `primer-apellido` FROM `docentes` WHERE `n_empleado`="'.$fila['docente'].'"';
            $resultado2=($conexion->ejecutarConsulta($consulta))->fetch_assoc();
            $nombre=$resultado2['primer-nombre']." ".$resultado2['primer-apellido'];

            $registros[$i]['nombredocente']=$nombre;

            $registros[$i]['cupos']=$fila['cupos'];
            $registros[$i]['dias']=$fila['dias'];
            $registros[$i]['periodo']=$fila['periodo'];
            $registros[$i]['hora_inicial']=$fila['hora_inicial'];
            $registros[$i]['hora_final']=$fila['hora_final'];
            $registros[$i]['edificio']=$fila['edificio'];
            $registros[$i]['aula']=$fila['aula'];
            $registros[$i]['anio']=$fila['anio'];

            $i++;
        }
        //var_dump($registros);
        echo(json_encode($registros));

    break;
}
