<?php get_header(); ?>

<section class="noticia-completa">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>

        <article class="noticia">
            <h1><?php the_title(); ?></h1>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="noticia-thumb">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
            <?php endif; ?>
            <h2>Artículo</h2>
            <div class="noticia-contenido">
                <?php the_content(); ?>
            </div>
        </article>

    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>
