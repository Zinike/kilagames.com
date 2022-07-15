<!DOCTYPE html>
<html lang="es" dir="ltr">

  <?php include("conexion.php"); ?>

  <head>
    <meta charset="utf-8">
    <meta name="author" content="Marcos Zingaretti">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <title>KilaGames</title>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <header>
      <div class="contenedor">
        <img src="Media/logo.png" alt="logo">
        <nav class="menu">
          <ul>
            <li>
              <a href="#hero">
                <p>Inicio</p>
              </a>
            </li>
            <li>
              <a href="#pc">
                <p>PC</p>
              </a>
            </li>
            <li>
              <a href="#consolas">
                <p>Consolas</p>
              </a>
            </li>
            <li>
              <a href="#peliculas">
                <p>Peliculas y Series</p>
              </a>
            </li>
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

    <section id="pc">
      <div class="contenedor">
        <h2>Juegos de PC</h2>
        <form class="pc-games card">
          <?php $resultado = mysqli_query($conn, $pclimited);
            while ($row=mysqli_fetch_assoc($resultado)) {?>
          <div class="tarjeta">
            <img src="<?php echo $row['foto'];?>" alt="imagen" height="200px">
            <h3><?php echo $row['nombre'];?></h3>
            <p><?php echo $row['descripcion'];?></p>
            <div class="link">
              <a href="<?php echo $row['links'];?>" target="_blank">Descargar</a>
              <p>Contraseña: <?php echo $row['contraseña'];?></p>
            </div>
          </div>
          <?php }?>
          <?php mysqli_free_result($resultado);?>
        </form>
        <a href="juegos.php">Ver Más</a>
      </div>
    </section>

    <section id="consolas">
      <div class="contenedor">
        <h2>Juegos de Consolas</h2>
        <form class="consola-games card" action="index.html" method="post">
          <ul>
            <p>PROXIMAMENTE</p>
          </ul>
        </form>
      </div>

    </section>

    <section id="peliculas">
      <div class="contenedor">
        <h2>Peliculas y Series</h2>
        <form class="peliculas-series card" action="index.html" method="post">
          <ul>
            <p>PROXIMAMENTE</p>
          </ul>
        </form>
      </div>
    </section>

    <section id="donaciones">
      <div class="contenedor">
        <h2>Donaciones</h2>
        <p>Gracias por visitarnos, si queres ayudarnos a que sigamos subiendo juegos podes contribuir al mantenimiento de nuestra pagina en el siguiente link</p>
        <a href="https://paypal.me/KilaGames?country.x=AR&locale.x=es_XC" target="_blank">Paypal</a>
      </div>
    </section>

    <footer>
      <div class="contenedor">
        <p>KilaGames - Todos los derechos reservados</p>
      </div>
    </footer>
  </body>

  <script src="JS/menu.js"></script>

</html>
