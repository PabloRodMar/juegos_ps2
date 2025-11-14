<?php
/*
Template Name: Noticias
*/
?>

<?php get_header(); ?> 
<main>
<?php
    get_template_part('template-parts/loop', 'noticias');
?>
</main>
<?php get_footer(); ?>