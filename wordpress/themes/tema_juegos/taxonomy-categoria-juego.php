<?php get_header(); ?>

<main class="taxonomy-categoria-juego">

    <?php
    // Título de la categoría
    single_term_title('<h1>', '</h1>');

    // Descripción de la categoría (si tiene)
    if (term_description()) {
        echo '<div class="descripcion-categoria">' . term_description() . '</div>';
    }

    // Loop de posts en esta categoría
    $args = array(
        'post_type' => 'videojuegos',
        'tax_query' => array(
            array(
                'taxonomy' => 'categoria-juego',
                'field'    => 'slug',
                'terms'    => get_queried_object()->slug,
            ),
        ),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <article>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                    <h2><?php the_title(); ?></h2>
                </a>
            </article>
        <?php endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No hay videojuegos en esta categoría.</p>';
    endif;
    ?>

</main>

<?php get_footer(); ?>
