<?php
session_start();
//si hay una sesión
if (!isset($_SESSION['name'])){
    //se muestra el contenido de la página web
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css/fontello.css" /><!-- para el icono del menu -->
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <?php
        include("header.html");
    ?>

    <?php
        include("login.html");
    ?>

    <?php
        include("contenido-principal.html");
    ?>

    <?php
        include("footer.html");
    ?>

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php
}//si no hay sesión
else{
    if ($_SESSION['lvl']==1) {
        header ('location: estudiantes/');
    }else{
        if ($_SESSION['lvl']==2) {
            header ('location: docentes/');
        }else{
            if ($_SESSION['lvl']==3) {
                header ('location: registro/');
            }else{
                if ($_SESSION['lvl']==4) {
                   // header ('location: ./');
                }else{
                    
                }
                
            }
            
        }
        
    }
    
}
?>
