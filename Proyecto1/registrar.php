<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>

<body>
  <form action="archivo_registrar.php" method="post" enctype="application/x-www-form-urlencoded">
    <div class="">
      <label for="control2_nombre">Usuario</label>
      <input type="text" name="datos_registrar_usuario" class="" id="control2_nombre" placeholder="Username" required>
    </div>
    <div class="">
      <label for="control2_contraseña">Contraseña</label>
      <input type="password" name="datos_registrar_contraseña" class="" id="control2_contraseña" placeholder="Password"
        required>
    </div>
    <button type="submit" class="">Registrar</button>
  </form>
</body>

</html>