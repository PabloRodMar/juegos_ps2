<?php
/*
Template Name: Videojuegos
*/
?>

<?php get_header(); ?> 
<main>
<h1 class="todos-los-juegos">TODOS LOS JUEGOS</h1>
<?php
    get_template_part('template-parts/loop', 'videojuegos');
?>
</main>
<?php get_footer(); ?>