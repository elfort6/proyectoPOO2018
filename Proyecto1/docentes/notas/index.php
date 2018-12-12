<?php
    session_start();
    if ($_SESSION['lvl']==2 or $_SESSION['lvl']==3) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aqui va la sección</title>

    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css" />
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="../css/docente.css">

    <link rel="stylesheet" href="css/notas.css">
    
    <link rel="stylesheet" href="../../css/fontawesome/all.css">
    <link rel="stylesheet" href="../../css/animate.css">

</head>
<body>
    <?php
        include("header.php");
    ?>

    <div class="container-fluid my-5" id="contenido-principal">

        <?php
            include("encabezado.php");
        ?>

        <?php
            include("listado-notas.php");
        ?>
        
    </div>

    <?php
        include("../footer.html");
    ?>
    
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    
    <script src="../js/animaciones.js"></script>

</body>
</html>
<?php
} else {
    header('location: ../');
}
