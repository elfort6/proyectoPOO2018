<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <style>
        body{
            
        }

        .container{
            /* width: 250px; */

            /* background: rgba(89, 89, 89, 0.65); */
            /* border: 1px solid grey;
            border-radius: 10%; */
            margin-top: 50px;
            padding: 10px;
        }

        @media (min-width:601px){
            .container{
                /* width: 350px; */
                /* background: rgba(89, 89, 89, 0.65); */
                border: 1px solid grey;
                border-radius: 10px;
                box-shadow: 2px 2px 5px #999;
                margin-top: 50px;
                padding: 10px;
            }
        }

        @media (min-width:768px){
            .container{
                width: 350px;
                background: rgba(24, 24, 24, 0.65);
                padding: 10px;
                color: white;
                position: absolute;
                right: 50px;
                top: 50px;
                box-shadow: none;
            }

            body{
                background-color: #002484;
                background-image: url(recursos/entrada.jpg);
                background-size: 100%;
                background-repeat: no-repeat;
            }
        }

    </style>
</head>

<body>

    <!-- /////////////////////////////////////////// -->
    <section class="container animated fadeIn"> <!-- animated fadeIn slower -->
        <h2 class="text-center">Iniciar Sesión</h2>
        <form action="validar.php" method="post" enctype="application/x-www-form-urlenclded">
            <div class="form-group">
                <label for="id">Clave de acceso:</label>
                <input type="text" class="form-control" id="id" placeholder="#cuenta o #empleado" name="id" require>
            </div>
            <div class="form-group">
                <label for="clave">Contraseña:</label>
                <input type="password" class="form-control" id="clave" placeholder="contraseña" name="clave" require>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Recuerdame.
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
    </section>
    <!-- ////////////////////////////////////////// -->

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>