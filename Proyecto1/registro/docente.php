<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro Docentes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />


</head>

<body>

    <div class="container">
        
        <?php
            include("header.html");
        ?>

        <div class="row my-4">
            <?php
                include("formularios/formulario-d.html");
            ?>
        </div>

        <?php
            include("footer.html");
        ?>
        
    </div>

    <script src="../js/jquery-3.3.1.js"></script>

    <script src="js/docente.js"></script>

    <script>
        $(document).ready(function() {
            $("#op2").attr("class", "nav-link active");
        });
    </script>

</body>
</html>