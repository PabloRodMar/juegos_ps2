<?php

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comentarios-videojuego">
    <h2>Comentarios</h2> 

    <?php if ( have_comments() ) : ?>
        
        <ul class="comment-list comentarios-grid"> 
            <?php
                wp_list_comments( array(
                    'style'      => 'ul', // ¡Cambiado de 'ol' a 'ul' para quitar la numeración!
                    'short_ping' => true,
                    'avatar_size' => 0, 
                    'callback'   => 'my_custom_comment_display', 
                    'per_page' => 9, 
                ) );
            ?>
        </ul>
        
        <?php the_comments_navigation(); ?>

    <?php endif; // Cierre de have_comments() ?>
    
    <?php
    // --- FUNCIÓN PARA MOSTRAR EL FORMULARIO DE COMENTARIOS MÁS SIMPLE ---
    comment_form(array(
    'title_reply' => 'Deja un comentario', 
    'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="5" maxlength="65525" required="required" placeholder="Escribe tu comentario aquí..."></textarea></p>',
    
    'fields' => array(), 
    'comment_notes_before' => '', 
    'logged_in_as' => '', 
    'submit_button' => '<input name="submit" type="submit" id="submit" class="submit" value="Publicar comentario" />',
    'cancel_reply_link' => '', 
    'label_submit' => 'Publicar',
    ));
    ?>

</div>
