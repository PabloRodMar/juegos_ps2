<div class="videojuegos">

<?php
$args = array(
    'post_type'      => 'videojuegos',
    'posts_per_page' => -1
);

$videojuegos = new WP_Query($args);

if ($videojuegos->have_posts()) :
    while ($videojuegos->have_posts()) : $videojuegos->the_post(); ?>
        <article class="videojuego-item">
            <!-- TÍTULO -->
            <h2><?php the_title(); ?></h2>
            <!-- ENLACE A LA PÁGINA DEL VIDEOJUEGO -->
            <a href="<?php the_permalink(); ?>" class="videojuego-link">
                <!-- PORTADA -->
                <div class="videojuego-portada">
                    <?php 
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    }
                    ?>
                </div>
            </a>
        </article>
<?php
    endwhile;
    wp_reset_postdata();
else :
    echo "<p>No hay videojuegos disponibles.</p>";
endif;
?>

</div>