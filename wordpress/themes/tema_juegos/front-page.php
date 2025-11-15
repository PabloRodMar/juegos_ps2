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
        <a href="<?php the_permalink(); ?>" class="titulo-juego"><?php the_title(); ?></a>
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <div class="thumb">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
        </a>
        <?php endif; ?>
        </article>
    <?php endwhile;
    wp_reset_postdata();
    endif; ?>
</div>
<a href="<?php echo get_permalink( get_page_by_path('videojuegos') ); ?>" class="ver-todos">Ver todos</a>
</section>


<section class="noticias-inicio">
<h2 class="noticia-inicio-titulo">Noticias</h2>
<div class="noticias-inicio-grid">
    <?php
    $noticias = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 2
    ));
    if ($noticias->have_posts()) :
    while ($noticias->have_posts()) : $noticias->the_post(); ?>
        <article class="noticia-inicio">
        <?php if (has_post_thumbnail()) : ?>
            <div class="noticia-img"><?php the_post_thumbnail('medium'); ?></div>
        <?php endif; ?>
        <h3><?php the_title(); ?></h3>
        <p><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
        <a href="<?php the_permalink(); ?>" class="leer-mas">Leer más</a>
        </article>
    <?php endwhile;
    wp_reset_postdata();
    endif; ?>
</div>

<div class="ver-todas-container">
    <a class="ver-todas" href="<?php echo get_permalink( get_page_by_path('noticias') );?>">Ver todas las noticias</a>
</div>

</section>

<?php get_footer(); ?>