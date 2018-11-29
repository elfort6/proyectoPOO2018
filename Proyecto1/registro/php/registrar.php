<?php

    switch($_GET["opcion"]){
        case 1:

            $_POST["foto"]="img/perfil-por-defecto.jpg";

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

            echo $registro;
        break;
        case 2:
            echo("Hola mundo");
        break;
    }
?>