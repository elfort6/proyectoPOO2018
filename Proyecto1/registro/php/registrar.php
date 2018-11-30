<?php

    switch($_GET["opcion"]){
        case 1:

          //se establece una conexion a la base de datos
        include '../../php/conexion.php';
      //si se han enviado datos
        
            $usuario = mysqli_real_escape_string($conexion, $_POST["numero-cuenta"]);
            $contraseña = password_hash($_POST["contraseña"], PASSWORD_DEFAULT);

            $ingresarusu = mysqli_query($conexion, 'insert into usuarios(cuenta,clave,nivel) values
       ("' .$usuario. '","' . $contraseña . '","1")') or die('<p>Error al registrar</p><br>' . mysqli_error($conexion));
        
       $ingresarestu = mysqli_query($conexion, 'insert into estudiantes(cuenta,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,fecha_nacimiento,carrera,n_identidad,email,foto) values
       ("' .$usuario. '",
       "'. $_POST["primer-nombre"].'",
       "' . $_POST["segundo-nombre"]. '",
       "' . $_POST["primer-apellido"]. '",
       "' . $_POST["segundo-apellido"]. '",
       "' . $_POST["fecha-nacimiento"]. '",
       "' . $_POST["carrera"]. '",
       "' . $_POST["numero-identidad"]. '",
       "' . $_POST["email"]. '",
       "img/perfil-por-defecto.jpg")')
        or die('<p>Error al registrar estudiante</p><br>' . mysqli_error($conexion));
        
        $creah = mysqli_query($conexion, 'CREATE TABLE ah'.$usuario.' ( `codigo` TEXT NOT NULL , `asignatura` TEXT NOT NULL , `uv` INT NOT NULL , `seccion` INT NOT NULL , `anio` INT NOT NULL , `periodo` INT NOT NULL , `calificacion` INT NOT NULL , `observacion` TEXT NOT NULL ) ENGINE = MyISAM;') 
        or die('<p>Error al registrar</p><br>' . mysqli_error($conexion));

        $creaf3 = mysqli_query($conexion, 'CREATE TABLE f3'.$usuario.' ( `codigo` TEXT NOT NULL , `asignatura` TEXT NOT NULL , `seccion` INT NOT NULL , `hi` INT NOT NULL , `hf` INT NOT NULL , `dias` TEXT NOT NULL , `edificio` TEXT NOT NULL , `aula` TEXT NOT NULL , `uv` INT NOT NULL , `obs` TEXT NOT NULL , `periodo` INT NOT NULL , `semana` TEXT NOT NULL ) ENGINE = MyISAM;') 
        or die('<p>Error al registrar</p><br>' . mysqli_error($conexion));
        
     
       //redirección
            
        
        $registro=json_encode($_POST);
        echo $registro;

            /* $_POST["foto"]="img/perfil-por-defecto.jpg";

            $contraseña=$_POST["contraseña"];

            unset($_POST["contraseña"]);//eliminar contraseña del arreglo asociativo

            $registro=json_encode($_POST);

            $archivo=fopen("../../dbjson/estudiantes/estudiantes.json", "a+");

            fwrite($archivo, $registro."\n");
            fclose($archivo);

            $archivo=fopen("../../dbjson/usuarios.json","a+");


            $usuario='{"cuenta":"'.$_POST["numero-cuenta"].'","contraseña":"'.password_hash($contraseña, PASSWORD_DEFAULT).'","tipo":"1"}';

            fwrite($archivo, $usuario."\n");
            fclose($archivo);

            echo $registro; */
        break;
        case 2:
            echo("Hola mundo");
        break;
    }
?>
<?php

?>