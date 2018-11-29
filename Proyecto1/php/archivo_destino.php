<?php
//se lee la cookie de sesion
session_start();
//se establece una conexión a la base de datos

//se validarán los campos si la sesion aún no está abierta
if (empty($_SESSION) and isset($_POST['cuenta'])){
    //se escaparán caracteres peligrosos
    $cuenta = $_POST['cuenta'];
    $clave = $_POST['contraseña'];
    $archivo = fopen("../dbjson/usuarios.json","r");
    while(($linea=fgets($archivo))){
        //Cada linea es texto en formato JSON
        $registro = json_decode($linea,true);
        //print('contraseña mal'.$registro["cuenta"].' == '.$cuenta );
        if ($registro["cuenta"] ==$cuenta ){
            $verificar_contraseña=password_verify($clave,$registro['contraseña']);

            if ($verificar_contraseña){
                //se asigna la sesión y redirecciona
                $_SESSION['name']=$_POST['cuenta'];
                header ('location: ../home.html');
            }//si la contraseña es incorrecta
            else{
               # header ('location: ./');
              print('contraseña mal'. $verificar_contraseña);
            }
            

            exit();
        }else{//si el usuario no está registrado
            # header ('location: ./');
            print('usuario mal');
         }
    }
    fclose($archivo);
    echo "El usuario no existe";
 
}//si hay una sesion abierta o no se enviaron datos
else{
    #header ('location: ./');
    print('abierta mal');
}
?>