<?php get_header(); ?>

<main class="single-videojuego">
<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article>
            <!-- TÍTULO PRINCIPAL DE LA PÁGINA  -->
            <h1 class="titulo-pagina-juego"><?php the_title(); ?></h1>

            <!-- IMAGEN DESTACADA Y CARÁTULA -->
            <div class="thumbnail-videojuego">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('medium'); // Tamaño 'medium' para carátulas centradas
                }
                ?>
            </div>

            <!-- SECCIÓN DE GAMEPLAY (Advanced Custom Fields) -->
            <section class="gameplay-video">
                <?php
                $video_embed = get_field('gameplay_video_embed'); 
                
                if (!empty($video_embed)) {
                    echo '<div class="gameplay">' . $video_embed . '</div>';
                }
                ?>
            </section>  
            
            <!-- DESCRIPCIÓN -->
            <section class="descripcion-videojuego">
                <h2>Descripción</h2>
                <?php the_content(); ?>
            </section>

            <!-- COMENTARIOS -->
            <section class="comentarios-videojuego">
                    <?php comments_template();?>
            </section>
        </article>

<?php
    endwhile;
endif;
?>

</main>

<?php get_footer(); ?>