<!DOCTYPE html>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'> <!-- Esto es para que pille el la fuente en el css -->
        <?php wp_head(); ?>
    </head>
    <body>
    <header>
        <div class="barra_header">
            <a href="<?php echo home_url(''); ?>" class="navegacion">Inicio</a>
            
            <nav class="main-navigation">
                <ul class="menu">
                    <li class="menu-item juegos-dropdown">
                        <a href="<?php echo get_permalink( get_page_by_path('videojuegos') ); ?>" class="navegacion" >Juegos</a>
                        <!-- Desplegable con categorías -->
                        <ul class="sub-menu">
                            <?php
                            $categorias = get_terms(array(
                                'taxonomy'   => 'categoria-juego',
                                'hide_empty' => true, // solo mostrar categorías con juegos
                            ));

                            if ($categorias && !is_wp_error($categorias)) :
                                foreach ($categorias as $cat) : ?>
                                    <li>
                                        <a href="<?php echo get_term_link($cat); ?>">
                                            <?php echo esc_html($cat->name); ?>
                                        </a>
                                    </li>
                                <?php endforeach;
                            endif;
                            ?>
                        </ul>
                    </li>
                </ul>
            </nav>

            <a href="<?php echo get_permalink( get_page_by_path('noticias') ); ?>" class="navegacion">Noticias</a>
            <a class="navegacion">Consola</a>
            <a class="navegacion">Historia</a>
            <a class="navegacion">Contacto</a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png" class="logo">
        </div>
    </header>
