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

<?php
/**
 * Función de callback para el display de comentarios personalizado
 * Genera el markup de cada comentario con la clase "caja-comentario"
 */
if ( ! function_exists( 'my_custom_comment_display' ) ) :
    function my_custom_comment_display( $comment, $args, $depth ) {
        // Usamos la etiqueta <li> porque cambiamos el 'style' a 'ul' en comments.php
        $tag = 'li'; 
?>
        <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( 'caja-comentario' ); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
                
                <footer class="comment-meta">
                    <div class="comment-author-name">
                        <?php echo get_comment_author(); ?>: 
                    </div>
                    
                    <div class="comment-metadata" style="display:none;">
                        <?php edit_comment_link( esc_html__( '(Editar)', 'textdomain' ), '<span class="edit-link">', '</span>' ); ?>
                    </div>
                </footer>
                
                <div class="comment-content">
                    <?php comment_text(); // El contenido del comentario ?>
                </div>

                <?php
                if ( '0' == $comment->comment_approved ) : ?>
                    <p class="comment-awaiting-moderation"><?php esc_html_e( 'Tu comentario está esperando moderación.', 'textdomain' ); ?></p>
                <?php endif; ?>
                
                <div class="reply" style="display:none;">
                    <?php 
                    comment_reply_link( array_merge( $args, array(
                        'add_below' => 'div-comment',
                        'depth'     => $depth,
                        'max_depth' => $args['max_depth'],
                    ) ) );
                    ?>
                </div>
                
            </article>
        <?php
    }
endif;
?>