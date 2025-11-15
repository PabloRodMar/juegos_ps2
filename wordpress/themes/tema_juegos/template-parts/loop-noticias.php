<div class="noticias">

<?php
// Consulta personalizada para posts con categoría "noticia"
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'category_name' => 'noticias'
);

$query = new WP_Query($args);

if ($query->have_posts()) : 
    while ($query->have_posts()) : $query->the_post(); ?>

        <article class="noticia">
            <h2><?php the_title(); ?></h2>

            <?php if (has_post_thumbnail()) : ?>
                <div class="noticia-img">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
            <?php endif; ?>

            <div class="noticia-desc">
                <?php the_excerpt(); ?>
            </div>

            <a href="<?php the_permalink(); ?>" class="leer-mas">Leer más</a>
        </article>

    <?php endwhile;
else :
    echo '<p>No hay noticias publicadas aún.</p>';
endif;

wp_reset_postdata();
?>

</div>