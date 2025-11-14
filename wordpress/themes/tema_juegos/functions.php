<?php
function mi_tema_enqueue_styles() {
    // Carga el archivo style.css del tema principal
    wp_enqueue_style(
        'juegos-style',
        get_stylesheet_uri(), // Ruta al style.css principal
        array(),
        filemtime( get_template_directory() . '/style.css' ) 
    );
}
add_action( 'wp_enqueue_scripts', 'mi_tema_enqueue_styles' );
add_theme_support('post-thumbnails');
add_post_type_support('post', 'excerpt');

?>