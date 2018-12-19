<?php

switch ($_GET["opcion"]) {
    case 1:
        //se establece una conexion a la base de datos
        include '../../php/conexion.php';
        //si se han enviado datos

        $usuario = mysqli_real_escape_string($conexion, $_POST["numero-cuenta"]);
        $contraseña = password_hash($_POST["contraseña"], PASSWORD_DEFAULT);

        $ingresarusu = mysqli_query($conexion, 'insert into usuarios(cuenta,clave,nivel) values
        ("' . $usuario . '","' . $contraseña . '","1")') or die('<p>Error al registrar</p><br>' . mysqli_error($conexion));

        $ingresarestu = mysqli_query($conexion, 'insert into estudiantes(cuenta,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,fecha_nacimiento,carrera,n_identidad,email,`indice-pe`,foto) values
        ("' . $usuario . '",
        "' . $_POST["primer-nombre"] . '",
        "' . $_POST["segundo-nombre"] . '",
        "' . $_POST["primer-apellido"] . '",
        "' . $_POST["segundo-apellido"] . '",
        "' . $_POST["fecha-nacimiento"] . '",
        "' . $_POST["carrera"] . '",
        "' . $_POST["numero-identidad"] . '",
        "' . $_POST["email"] . '",
        "0",
        "img/perfil-por-defecto.jpg")')
            or die('<p>Error al registrar estudiante</p><br>' . mysqli_error($conexion));

        $creah = mysqli_query($conexion, 'CREATE TABLE ha' . $usuario . ' ( `codigo` TEXT NOT NULL , `asignatura` TEXT NOT NULL , `uv` INT NOT NULL , `seccion` INT NOT NULL , `anio` INT NOT NULL , `periodo` INT NOT NULL , `calificacion` INT NOT NULL , `observacion` TEXT NOT NULL ) ENGINE = MyISAM;')
            or die('<p>Error al registrar</p><br>' . mysqli_error($conexion));

        $creaf3 = mysqli_query($conexion, 'CREATE TABLE f3' . $usuario . ' ( `codigo` TEXT NOT NULL , `asignatura` TEXT NOT NULL , `seccion` TEXT NOT NULL  , `hi` INT NOT NULL , `hf` INT NOT NULL , `dias` TEXT NOT NULL , `edificio` TEXT NOT NULL , `aula` TEXT NOT NULL , `uv` INT NOT NULL , `obs` TEXT NOT NULL , `periodo` INT NOT NULL , `semana` TEXT NOT NULL, `anio` TEXT NOT NULL ) ENGINE = MyISAM;')
            or die('<p>Error al registrar</p><br>' . mysqli_error($conexion));
        
        $registro = json_encode($_POST);
        echo $registro;
        break;
    case 2:
    include '../../php/conexion.php';
    //si se han enviado datos

    $usuario = mysqli_real_escape_string($conexion, $_POST["numero-cuenta"]);
    $contraseña = password_hash($_POST["contraseña"], PASSWORD_DEFAULT);

    $ingresarusu = mysqli_query($conexion, 'insert into usuarios(cuenta,clave,nivel) values
    ("' . $usuario . '","' . $contraseña . '","2")') or die('<p>Error al registrar</p><br>' . mysqli_error($conexion));

    $ingresarestu = mysqli_query($conexion, 'insert into docentes(`primer-nombre`, `segundo-nombre`, `primer-apellido`, `segundo-apellido`, `fecha-nacimiento`, `n_empleado`, `nivel_academico`, `facultad`, `t_contrato`, `n_identidad`, `email`, `foto`) VALUES 
    ( "' . $_POST["primer-nombre"] . '",
    "' . $_POST["segundo-nombre"] . '",
    "' . $_POST["primer-apellido"] . '",
    "' . $_POST["segundo-apellido"] . '",
    "' . $_POST["fecha-nacimiento"] . '",
    "' . $usuario . '",
    "' . $_POST["nivel-academico"] . '",
    "' . $_POST["carrera"] . '",
    "' . $_POST["contrato"] . '",
    "' . $_POST["numero-identidad"] . '",
    "' . $_POST["email"] . '",
    "img/perfil-por-defecto.jpg")')
        or die('<p>Error al registrar docente</p><br>' . mysqli_error($conexion));
    break;
    
    case 3:
        include("../../class/class-sesion.php");
        $consulta='UPDATE `usuarios` SET `nivel`="3" WHERE `cuenta`="'.$_POST["docente"].'"';
        mysqli_query(sesion::conexion(),$consulta);
        echo("Se hizo correctamente");
    break;
}
