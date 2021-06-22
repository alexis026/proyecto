<?php
session_start();
require 'funciones.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proyecto</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="assets/css/mi_proyecto.css">
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">PELICULAS HD</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li>
              <a href="nosotros.php" class="btn">NOSOTROS <span class="badge"></span></a>
            </li> 
            <li>
              <a href="contacto.php" class="btn">CONTACTANOS <span class="badge"></span></a>
            </li>
            <li>
              <a href="carrito.php" class="btn">CARRITO <span class="badge"><?php print cantidadPeliculas(); ?></span></a>
            </li>  
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <section class="contenedor-nosotros">
    <h2 class="centrar-texto">Te Ofrecemos</h2>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="./upload/responsive.png" alt="">
            <h3>Seguridad</h3>
            <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
        </div>

        <div class="icono">
            <img src="./upload/heart.png" alt="">
            <h3>El mejor Cuidado</h3>
            <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
        </div>

        <div class="icono">
            <img src="./upload/efectos.png" alt="">
            <h3>Calidad En Productos</h3>
            <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
        </div>
    </div>
</section>


<div class="contenedor contenedor-grid">
    <main>
        <article>
            <h1>PORQUE SOMOS TU MEJOR OPCION</h1>
            <img src="./upload/Nosotros.jpeg">

            <p>Maecenas maximus urna vitae nisl semper, id volutpat ipsum scelerisque. Aenean nec ipsum finibus, eleifend dolor at, venenatis risus. Quisque varius orci et augue scelerisque luctus. Praesent laoreet tortor vel mauris suscipit convallis.
                Duis interdum venenatis metus, ut condimentum tortor fringilla eu. Curabitur mi lorem, pellentesque sed feugiat vitae, commodo id leo. Mauris nec dui consectetur, ullamcorper eros vel, volutpat nulla. Mauris mattis dignissim laoreet.
                In at tellus et quam iaculis commodo. Aliquam cursus turpis sed elit consequat placerat sit amet in ante. Nulla libero ex, imperdiet non faucibus a, sagittis sit amet ligula. Sed blandit ante est, nec aliquet quam pulvinar sed. Sed
                varius, lacus in facilisis ultrices, urna turpis ullamcorper nibh, sit amet interdum nisi nisi eget arcu. Vestibulum bibendum velit justo, eget cursus ipsum pharetra in.</p>
        </article>
    </main>

    <aside>
        <h2>Sobre Nosotros</h2>
        <p>
            Titulo Blog, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor
        </p>
    </aside>

    <aside>
        <h2>Nuestra Visión</h2>
        <p>
            Titulo Blog, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor
        </p>
    </aside>
</div>

</body>
</html>