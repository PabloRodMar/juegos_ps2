<?php get_header(); ?>

<main class="single-videojuego">

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <!-- TÍTULO -->
            <h1 class="titulo-videojuego"><?php the_title(); ?></h1>

            <!-- IMAGEN DESTACADA -->
            <div class="thumbnail-videojuego">
                <?php 
                if (has_post_thumbnail()) {
                    the_post_thumbnail('large');
                }
                ?>
            </div>
            
            <!-- DESCRIPCIÓN -->
            <section class="descripcion-videojuego">
                <h2>Descripción</h2>
                <?php the_content(); ?>
            </section>

            <!-- COMENTARIOS -->
            <section class="comentarios-videojuego">
                <h2>Comentarios</h2>
                <?php comments_template(); ?>
            </section>

        </article>

<?php
    endwhile;
endif;
?>

</main>

<?php get_footer(); ?>
