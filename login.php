<!DOCTYPE html>
<html lang="es" dir="ltr">

  <?php
  require("conexion.php");
  ?>

  <head>
    <meta charset="utf-8">
    <meta name="author" content="Marcos Zingaretti">
    <meta name="description" content="Los juegos que quieras, por el mejor precio: GRATIS">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <title>KilaGames</title>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <script async="async" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8486313476457837" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <header>
      <div class="contenedor">
        <img src="Media/logo.png" alt="logo">

        <div id="menu_icon" class="menu_icon">
          <div id="menu_button">
            <input type="checkbox" id="menu_checkbox">
            <label for="menu_checkbox" id="menu_label">
              <div id="menu_text_bar"></div>
            </label>
          </div>
        </div>

        <nav id="menu" class="menu">
          <ul>
            <a href="registro.php">Registrarse</a>
          </ul>
        </nav>
      </div>
    </header>

    <section id="hero">
      <div class="contenedor">
        <h1>KilaGames</h1><br>
        <h2>Tu sitio de juegos</h2>
      </div>
    </section>

    <section id="login-register">
      <div class="contenedor">
        <h2>Ingresa a tu cuenta</h2>
        <form method="post" action="index.php"autocomplete="off">

          <label for="username">Usuario</label>
          <input type="text" name="usuario" placeholder="Ingresa tu usuario"><br>

          <label for="password">Contraseña</label>
          <input type="password" name="contraseña" placeholder="Ingresa tu contraseña"><br>

          <input type="submit" name="login-register" value="Entrar"><br>

          <a href="registro.php">¿No tenes cuenta?</a>
        </form>
      </div>
    </section>

    <footer>
      <div class="contenedor">
        <p>KilaGames - Todos los derechos reservados</p>
      </div>
    </footer>

    <script src="script.js"></script>

  </body>

</html>
