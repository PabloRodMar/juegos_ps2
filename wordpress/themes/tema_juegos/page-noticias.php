<?php
/*
Template Name: Noticias
*/
?>

<?php get_header(); ?> 
<main>
<h1 class="todas-las-noticias">TODAS LAS NOTICIAS</h1>
<?php
    get_template_part('template-parts/loop', 'noticias');
?>
</main>
<?php get_footer(); ?>