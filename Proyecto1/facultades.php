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
    <title>Facultades</title>

    <link rel="stylesheet" href="css/fontello.css" /><!-- para el icono del menu -->
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php
        include("header.html");
    ?>
    <?php
        include("login.html");
    ?>

    <div id="contenido-pagina">

        <div class="container">
            <h1>Estas son las Facultades</h1>

            <p class="prueba" style="background: bisque;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus provident expedita dolor! Amet culpa quos nesciunt omnis maiores eos, aperiam natus eum magni distinctio voluptate odio consequatur accusantium necessitatibus ratione aspernatur. Nemo amet, blanditiis aliquid odio sequi assumenda esse doloremque eaque itaque nobis fuga praesentium minus dignissimos deserunt iste magnam.</p>

            <br>

            <p class="prueba" style="background: bisque;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus provident expedita dolor! Amet culpa quos nesciunt omnis maiores eos, aperiam natus eum magni distinctio voluptate odio consequatur accusantium necessitatibus ratione aspernatur. Nemo amet, blanditiis aliquid odio sequi assumenda esse doloremque eaque itaque nobis fuga praesentium minus dignissimos deserunt iste magnam.</p>

            <br>

            <p class="prueba" style="background: bisque;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus provident expedita dolor! Amet culpa quos nesciunt omnis maiores eos, aperiam natus eum magni distinctio voluptate odio consequatur accusantium necessitatibus ratione aspernatur. Nemo amet, blanditiis aliquid odio sequi assumenda esse doloremque eaque itaque nobis fuga praesentium minus dignissimos deserunt iste magnam.</p>

            <br>

            <p class="prueba" style="background: bisque;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus provident expedita dolor! Amet culpa quos nesciunt omnis maiores eos, aperiam natus eum magni distinctio voluptate odio consequatur accusantium necessitatibus ratione aspernatur. Nemo amet, blanditiis aliquid odio sequi assumenda esse doloremque eaque itaque nobis fuga praesentium minus dignissimos deserunt iste magnam.</p>
        </div>
    </div>

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