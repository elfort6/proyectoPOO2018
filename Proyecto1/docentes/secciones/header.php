<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../">

                <img src="../../img/logo-unah.png" alt="la imagen se mamo" width="110" height="60">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" id="enlaces-menu">
                    <li class="nav-item"><a class="nav-link" href="../">Secciones</a></li>
                    <li class="nav-item"><a id="listado-est" class="nav-link" href="">Listado de Alumnos</a></li>
                    <li class="nav-item"><button type="button" class="nav-item btn perfil"  style="box-shadow:none;" onclick="verifica();">Subir Notas</button></li>
                    <?php if ($_SESSION['lvl'] == 3) {
    ?>
                    <li class="nav-item"><a class="nav-link" href="../../coordinador-carrera">Cordinador</a></li>
                    <?php
} ?>
                </ul>


                <div class="dropdown" style="margin-left:0; ">
                    <button type="button" class="btn dropdown-toggle perfil" data-toggle="dropdown" style="box-shadow:none;">
                        <img src="../../img/perfil-maestro.jpg" class="rounded-circle foto-perfil " width="50px" alt="Cinque Terre">
                        <span class="usu"><?php echo($_SESSION['name'])?></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../../php/cerrar_sesion.php">salir</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>