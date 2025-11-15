<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <?php wp_head(); ?>
</head>
<body>
<header class="main-header">
    <div class="barra_header">
        
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png" class="logo">
        
        <button class="menu-toggle" aria-expanded="false" aria-controls="main-menu">
            ☰
        </button>
        
        <nav class="main-navigation" id="main-menu">
            
            <a href="<?php echo home_url(''); ?>" class="navegacion">Inicio</a>
            
            <ul class="menu">
                <li class="menu-item juegos-dropdown">
                    <a href="<?php echo get_permalink( get_page_by_path('videojuegos') ); ?>" class="navegacion" >Juegos</a>
                    <ul class="sub-menu">
                        <?php
                        $categorias = get_terms(array(
                            'taxonomy' => 'categoria-juego',
                            'hide_empty' => true,
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

            <a href="<?php echo get_permalink( get_page_by_path('noticias') ); ?>" class="navegacion">Noticias</a>
            <a href="<?php echo get_permalink( get_page_by_path('consola') ); ?>" class="navegacion">Consola</a>
            <a href="<?php echo get_permalink( get_page_by_path('historia') ); ?>" class="navegacion">Historia</a>
            <a href="<?php echo get_permalink( get_page_by_path('contacto') ); ?>" class="navegacion">Contacto</a>
            
        </nav>
        
    </div>
</header>