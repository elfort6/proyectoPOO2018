<?php
session_start();
if(isset($_POST['id'])and isset($_POST['clave'])){
   include('conexion.php');
   $idusu=mysqli_real_escape_string($conexion,$_POST['id']);
   $contraseña=mysqli_real_escape_string($conexion,$_POST['clave']);
   $comprueba_usu='select * from estudiantes where id="'.$idusu.'"';
   $comprobacion=$conexion->query($comprueba_usu);
   if($comprobacion->num_rows>0){
     $consulta_db=mysqli_query($conexion,'select clave from estudiantes Where id="'.$idusu.'"');
     $recoger_dato=mysqli_fetch_assoc($consulta_db);
     $comprueba_cla=password_verify($contraseña,$recoger_dato['clave']);
     if($comprueba_cla){
        $_SESSION['id']=$idusu;
        header('location: ./pagina-estudiantes.html');

      }else{
        print 'los datos han sido incorectos<br>';
      }
   }else{print 'no se encontro el usuario<br>';}
}else{
  
  print 'los datos han sido incorectos lol<br>';
  #header('location: ./');
}
?>