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


    <main class="contenedor seccion contenido-centrado">
    <h2 class="fw-300 centrar-texto">Llena el formulario de Contacto</h2>

    <form class="contacto" action="">
        <fieldset>
            <legend>Información Personal</legend>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" placeholder="Nombre">

            <label for="email">E-mail: </label>
            <input type="email" id="email" placeholder="Correo electrónico" required>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" placeholder="Teléfono" required>

            <label for="Articulo">Articulo solicitado:</label>
            <input type="Articulo" id="Articulo" placeholder="Articulo solicitado (opcional)" required>

            <label for="mensaje">Mensaje: </label>
            <textarea  id="mensaje"></textarea>

        </fieldset>
          
        <input type="submit" value="Enviar" class="boton boton-naranja">

    </form>
</main>


</body>
</html>
