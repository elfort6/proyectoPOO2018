<?php
if (isset($_FILES["file"]))
{
    $file = $_FILES["file"];
    /* $nombre = $file["name"]; */
    $nombre = "perfil-numerocuenta.jpg";
    $tipo = $file["type"];
    $ruta_provisional = $file["tmp_name"];
    $size = $file["size"];
    $dimensiones = getimagesize($ruta_provisional);
    $width = $dimensiones[0];
    $height = $dimensiones[1];
    $carpeta = "../perfiles-usuarios/";


    if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png')
    {
      echo '<p style="color:red">Error, Formato no permitido.<p>'; 
    }
    else if ($size > 1024*1024)
    {
      echo '<p style="color:red">Error, el tamaño máximo permitido es un 1MB.<p>';
    }
    else if ($width > 600 || $height > 600)
    {
        echo '<p style="color:red">Error la anchura y la altura maxima permitida es 600px.<p>';
    }
    else if($width < 70 || $height < 70)
    {
        echo '<p style="color:red">Error la anchura y la altura mínima permitida es 70px.<p>';
    }
    else
    {
        $src = $carpeta.$nombre; 
        move_uploaded_file($ruta_provisional, $src);
        
        /* $src = "perfiles-usuarios/".$nombre;
        echo "<img src='$src'>"; */
        echo '<p style="color:green">La imagen se ha subido con éxito.<p>';

    }
}
?>