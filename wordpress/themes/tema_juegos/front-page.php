<?php get_header();?>

<section class="titulo">
  <div>
    <h1 class="titulo-texto">MUSEO PLAY 2</h1>
    <p class="sub-titulo">Descubre la historia de la consola que inicio el siglo 21</p>
    <img class="titulo-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/ps2.png">
  </div>
</section>

<section class="juegos">
<h2 class="titulo-juegos">Últimos juegos</h2>
<div class="juegos-grid">
    <?php
    $juegos = new WP_Query(array(
    'post_type' => 'videojuegos',
    'posts_per_page' => 5
    ));
    if ($juegos->have_posts()) :
    while ($juegos->have_posts()) : $juegos->the_post(); ?>
        <article class="juego">
        <h3><?php the_title(); ?></h3>
        <?php if (has_post_thumbnail()) : ?>
            <div class="thumb"><?php the_post_thumbnail('medium'); ?></div>
        <?php endif; ?>
        <?php
        // Campo ACF: gameplay (si existe)
        $gameplay = get_field('gameplay');
        if ($gameplay) :
            echo '<p><strong>Gameplay:</strong> ' . esc_html($gameplay) . '</p>';
        endif;
        ?>
        </article>
    <?php endwhile;
    wp_reset_postdata();
    endif; ?>
</div>
</section>


<section class="noticias-inicio">
<h2>Noticias</h2>
<div class="noticias-grid">
    <?php
    $noticias = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3
    ));
    if ($noticias->have_posts()) :
    while ($noticias->have_posts()) : $noticias->the_post(); ?>
        <article class="noticia">
        <?php if (has_post_thumbnail()) : ?>
            <div class="foto-noticia"><?php the_post_thumbnail('medium'); ?></div>
        <?php endif; ?>
        <h3><?php the_title(); ?></h3>
        <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
        <a href="<?php the_permalink(); ?>">Leer más</a>
        </article>
    <?php endwhile;
    wp_reset_postdata();
    endif; ?>
</div>

<div class="ver-todas">
    <a href="<?php echo get_permalink(get_option('Noticias')); ?>">Ver todas las noticias</a>
</div>

</section>

<?php get_footer(); ?>