<!DOCTYPE html>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'> <!-- Esto es para que pille el la fuente en el css -->
        <?php wp_head(); ?>
    </head>
    <body>
    <header>
        <div class="barra_header">
            <a href="<?php echo home_url(); ?>" class="navegacion">Inicio</a>
            <a class="navegacion">Juegos</a>
            <a class="navegacion">Noticias</a>
            <a class="navegacion">Consola</a>
            <a class="navegacion">Historia</a>
            <a class="navegacion">Contacto</a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/play.png" class="logo">
        </div>
    </header>
