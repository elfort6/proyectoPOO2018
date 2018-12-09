<?php
    class sesion
    {
        public static function conexion()
        {
            $conexion=mysqli_connect('localhost', 'root', '', 'dbregistro') or die('Error al conectar con la base de datos');
            return $conexion;
        }

        public static function session()
        {
            session_start();
            //si hay una sesión

            if (isset($_SESSION['name'])==false) {
                echo '';
            } else {
                //se redirecciona
    
                echo $_SESSION['name'];
            }
        }
        
        public static function cerrar_sesion()
        {
            session_start();
            session_destroy();
            header('location: ../');
        }
        
        public static function registrar()
        {
			sesion::conexion();
            //si se han enviado datos
            if (isset($_POST['datos_registrar_usuario']) and isset($_POST['datos_registrar_contraseña'])) {
                $usuario=mysqli_real_escape_string($conexion, $_POST['datos_registrar_usuario']);
                $contraseña=password_hash($_POST['datos_registrar_contraseña'], PASSWORD_DEFAULT);
                $ingresar=mysqli_query($conexion, 'insert into usuarios(cuenta,clave,nivel) values
    			("'.$usuario.'","'.$contraseña.'","'.$contraseña.'")') or die('<p>Error al registrar</p><br>'.mysqli_error($conexion));
                //redirección
                header('location: ./');
            }//si no se enviaron datos
            else {
                header('location: ./');
            }
        }
    }
