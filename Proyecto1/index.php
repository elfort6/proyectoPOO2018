<?php
session_start();
//si hay una sesión
if (isset($_SESSION['name'])==false){
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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Elvin /////////////// -->
    <div class="">
        <header >
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="index.html"><img src="img/logo-unah.png" alt="la imagen se mamo" width="135"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="centros-regionales.html">Centros Regionales</a></li>
                        <li class="nav-item"><a class="nav-link" href="facultades.html">Facultades</a></li>
                        <li class="nav-item"><a class="nav-link" href="otra-opcion.html">otra opcion</a></li>
                    </ul>
                    <!--a class="btn1 btn-outline-login" href="login.html " role="button"> Ingresar </a-->
                    <a class="btn1 btn-outline-login" href="#" data-toggle="modal" data-target=".bs-example-modal-sm" role="button">Ingresar</a>
                </div>
                </div>
            </nav>
        </header>
    </div>
    <!-- fin-Elvin//////////// -->


    <!--modal para iniciar sesión-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
          <div class="modal-header">
           <h2>Iniciar sesión</h2>
          </div>
          <div class="modal-body">
            <form action="archivo_destino.php" method="post" enctype="application/x-www-form-urlencoded">
              <div class="form-group">
                <label for="control1_nombre">Usuario</label>
                <input type="text" name="datos_introducidos_usuario" class="form-control" id="control1_nombre" placeholder="Username" required>
              </div>
              <div class="form-group">
                <label for="control1_contraseña">Contraseña</label>
                <input type="password" name="datos_introducidos_contraseña" class="form-control" id="control1_contraseña" placeholder="Password" required>
              </div>
              <button type="submit" class="btn btn-success btn-block">Entrar</button>
            </form>
          </div>
      </div>
    </div>
  </div>
    
    <!-- Slider //////////////////////// -->
    <div id="demo" class="carousel slide slider1" data-ride="carousel">
        <!-- Indicators -->
        <!-- <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
        </ul> -->

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slide1.jpg" alt="Los Angeles">
            </div>
            <div class="carousel-item">
                <img src="img/slide2.jpg" alt="Chicago">
            </div>
            <div class="carousel-item">
                <img src="img/slide3.jpg" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="img/slide4.jpg" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!-- Fin_Slider //////////////////// -->

    <hr>

    <div class="container">
        <p class="prueba">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta possimus, velit
            sint ea
            architecto nisi accusamus consequatur suscipit labore quo modi ullam similique accusantium incidunt adipisci
            ducimus asperiores porro maiores! Ducimus quidem autem beatae ipsa obcaecati odio tempora omnis corrupti! Magni
            distinctio quam possimus hic molestias quis ipsa cupiditate fugiat delectus, iusto reprehenderit libero, sunt
            nisi? Odio nihil voluptas minus aliquam ipsum veritatis adipisci similique dolorum! Quis sequi aliquid
            deserunt, nam saepe, eos perferendis hic debitis tempora odit suscipit quidem minus quisquam accusamus fuga
            libero optio? Illum nobis numquam animi architecto, est quam inventore, deserunt facilis ipsa corporis,
            necessitatibus officia pariatur facere aliquid. Laborum soluta tempora ut. Dolores in id deleniti possimus
            minus aliquam deserunt odio laboriosam magni. Itaque quia commodi ducimus asperiores eligendi vero adipisci
            earum corrupti et doloremque, repellendus perferendis, harum sequi beatae ipsa distinctio quisquam facere
            cumque culpa. In eos velit veniam repellat iusto ad optio expedita fugiat temporibus a, vitae amet quibusdam,
            rerum, perferendis cupiditate voluptates magni. Cumque quos tenetur assumenda officiis at, maiores, illum
            explicabo nihil provident, facilis sunt ratione aspernatur repudiandae quis optio numquam nesciunt ipsa eum
            vel! Consequuntur fugit vel sint dolore, iusto soluta rerum esse quis adipisci quaerat doloribus laudantium
            maxime modi consectetur est voluptates ab recusandae cumque neque autem temporibus! Rem dolorem optio veritatis
            molestiae asperiores tenetur soluta earum natus voluptates, magnam exercitationem nesciunt ex sequi
            reprehenderit autem, officiis ut deleniti enim assumenda adipisci neque. Dolor exercitationem in repudiandae
            praesentium sit velit dicta soluta reiciendis? Magnam assumenda illum praesentium pariatur exercitationem ea
            rem atque, a enim quibusdam beatae quasi iure blanditiis optio inventore deleniti velit aperiam nemo aut ut?
            Nostrum deleniti minus ipsam ex exercitationem nihil. Quae expedita sit, odio alias maxime porro nobis? Dolores
            perferendis ea deleniti aspernatur accusantium, in officia. Nihil exercitationem quo qui asperiores quam dolor
            sint culpa voluptatibus quasi mollitia consectetur nesciunt dolores architecto, optio rerum perferendis
            praesentium. Rerum, architecto fuga quo beatae voluptas veniam eligendi atque possimus aliquam voluptate.
            Accusantium, sapiente dolores? Quae pariatur numquam illo voluptas maiores, ab inventore atque temporibus cum,
            alias ex repellendus explicabo ea sint, laborum porro accusamus obcaecati. Nihil hic sequi dolore ea, esse
            itaque placeat, vitae, ipsum quod voluptatem praesentium. Atque repellat veritatis deleniti facere itaque
            cumque rerum voluptatem maxime unde quaerat? Eaque, possimus sapiente? Quas praesentium ipsa ut dicta soluta
            vitae exercitationem obcaecati veniam aliquam voluptate repellendus inventore fugiat impedit quo, officia
            possimus consectetur, nobis odit, modi eius nam? Ipsam obcaecati quod in maxime ex, voluptatem, consequuntur
            nam vel magni veritatis voluptate veniam assumenda eligendi laborum! Tenetur autem dolorem, veniam aliquid
            tempora vero impedit molestias facilis amet sequi et perspiciatis maiores fugiat illum aperiam quasi optio
            nulla. Assumenda, odio labore? Incidunt eligendi similique, sed omnis maiores iure quia qui dolores. Libero
            illo amet natus adipisci! Expedita consectetur, necessitatibus recusandae fugiat vel ipsum commodi, soluta hic
            exercitationem esse in enim maiores explicabo ea quisquam eum eos cum libero? Placeat esse autem itaque error
            tempore facilis ea velit minus repellendus officiis dolor perspiciatis reprehenderit minima obcaecati,
            doloremque, veritatis ratione odio natus!</p>
    </div>

    <!-- footer /////////////////////////////// -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p style="color:#cccccc;">UNIVERSIDAD NACIONAL AUTÓNOMA DE HONDURAS</p>
                </div>
                <div class="col-12 col-md-6" style="text-align: right;">
                    <a class="icon-facebook-squared" href="#"></a>
                    <a class="icon-twitter-squared" href="#"></a>
                    <a class="icon-instagram" href="#"></a>
                    <a class="icon-gplus-squared" href="#"></a>
                </div>
            </div>
            <hr style="background: white;">

            <div class="row">
                <div class="col-12 col-md-4">
                    <p style="color:#cccccc;">Bulevar Suyapa, Tegucigalpa, M.D.C, Honduras, Centroamérica</p>
                    <p style="color:#ffcc00;">info@unah.edu.hn <br>
                        2216-6100, 2216-5100, 2216-3000, 2216-7000
                    </p>
                </div>
                <div class="col-12 col-md-4" style="text-align: center;">
                    <img src="img/logo-unah-blanco.png" alt="logo-unah">
                </div>
                <div class="col-12 col-md-4" style="text-align: right;">
                    <button type="button" class="btn btn-secondary contacto">CONTÁCTENOS</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p style="color:#cccccc;">Derechos reservados Universidad Nacional Autónoma de Honduras 2017<br>
                        Desarrollado por la <span style="color:#ffcc00; border-bottom: 1px dotted #cccccc;;">Dirección
                            Ejecutiva de Gestión de Tecnología</span></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- fin footer /////////////////////////// -->
    <!-- ////////////////////////////////////////// -->

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php
}//si no hay sesión
else{
    //se redirecciona
    header ('location: home.php');
}
?>