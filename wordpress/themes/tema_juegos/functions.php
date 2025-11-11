<?php
/**
 * Carga los estilos y scripts del tema
 */

function mi_tema_enqueue_styles() {
    // Carga el archivo style.css del tema principal
    wp_enqueue_style(
        'mi-tema-style', // Identificador único
        get_stylesheet_uri(), // Ruta al style.css principal
        array(), // Dependencias
        filemtime( get_template_directory() . '/style.css' ) // Versión basada en fecha de modificación (para evitar caché)
    );
}
add_action( 'wp_enqueue_scripts', 'mi_tema_enqueue_styles' );
?>