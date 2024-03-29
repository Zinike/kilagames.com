<!DOCTYPE html>
<html lang="es" dir="ltr">

<?php require("conexion.php"); ?>

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
  
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7173856593005932"
     crossorigin="anonymous"></script>
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
          <a href="#hero">Inicio</a>
          <a href="#pc">PC</a>
          <a href="#peliculas">Peliculas</a>
          <a href="#social">Social</a>
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
        <?php $resultado = mysqli_query($conexion, $pclimited);
            while ($row=mysqli_fetch_assoc($resultado)) {?>
        <div class="tarjeta">
          <img src="<?php echo $row['foto'];?>" alt="imagen" height="200px">
          <div class="texto">
            <h3><?php echo $row['nombre'];?></h3>
            <p><?php echo $row['descripcion'];?></p>
            <div class="link">
              <a href="<?php echo $row['links'];?>" target="_blank">Descargar</a>
              <p>Contraseña:
                <?php echo $row['contraseña'];?></p>
            </div>
          </div>
        </div>
        <?php }?>
        <?php mysqli_free_result($resultado);?>
      </form>
      <a href="juegos.php">Ver Más</a>
    </div>
  </section>

  <section id="peliculas">
    <div class="contenedor">
      <h2>Peliculas y Series</h2>
      <form class="peliculas-series card">
        <?php $resultado = mysqli_query($conexion, $peliculaslimited);
            while ($row=mysqli_fetch_assoc($resultado)) {?>
        <div class="tarjeta">
          <img src="<?php echo $row['foto'];?>" alt="imagen" height="200px">
          <div class="texto">
            <h3><?php echo $row['nombre'];?></h3>
            <p><?php echo $row['descripcion'];?></p>
            <div class="link">
              <a href="<?php echo $row['links'];?>" target="_blank">Descargar</a>
            </div>
          </div>
        </div>
        <?php }?>
        <?php mysqli_free_result($resultado);?>
      </form>
      <a href="peliculas.php">Ver Más</a>
    </div>
  </section>

  <section id="programas">
    <div class="contenedor">
      <h2>Programas</h2>
      <form class="programas card">
        <?php $resultado = mysqli_query($conexion, $programaslimited);
            while ($row=mysqli_fetch_assoc($resultado)) {?>
        <div class="tarjeta">
          <img src="<?php echo $row['foto'];?>" alt="imagen" height="200px" width="200px">
          <div class="texto">
            <h3><?php echo $row['nombre'];?></h3>
            <p><?php echo $row['descripcion'];?></p>
            <div class="link">
              <a href="<?php echo $row['links'];?>" target="_blank">Descargar</a>
            </div>
          </div>
        </div>
        <?php }?>
        <?php mysqli_free_result($resultado);?>
      </form>
      <a href="programas.php">Ver Más</a>
    </div>
  </section>

  <section id="social">
    <div class="contenedor">
      <div class="donacion">
        <h2>Donaciones</h2>
        <h3>¡Gracias por visitarnos!</h3>
        <p>Si queres ayudarnos a que sigamos subiendo juegos y seguir libre de anuncios molestos durante la descarga</p>
        <p>podes contribuir al mantenimiento de nuestra pagina en el siguiente link</p>
        <a href="https://paypal.me/KilaGames?country.x=AR&locale.x=es_XC" target="_blank">Paypal</a>
      </div>
    </div>
    <div class="contenedor">
      <div class="discord">
        <iframe src="https://discord.com/widget?id=980502183546089483&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
      </div>
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
