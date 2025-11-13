<?php
/*
    Plugin Name: Post Personalizado
    Description: Crear un post personalizado
    Version: 1.0.0
    Author: Rayco
    Text Domain: juegos
*/


function registrar_cpt_videojuegos() {

    $labels = array(
        'name'               => 'Videojuegos',
        'singular_name'      => 'Videojuego',
        'menu_name'          => 'Videojuegos',
        'name_admin_bar'     => 'Videojuego',
        'add_new'            => 'Añadir nuevo',
        'add_new_item'       => 'Añadir nuevo videojuego',
        'new_item'           => 'Nuevo videojuego',
        'edit_item'          => 'Editar videojuego',
        'view_item'          => 'Ver videojuego',
        'all_items'          => 'Todos los videojuegos',
        'search_items'       => 'Buscar videojuegos',
        'not_found'          => 'No se encontraron videojuegos.',
        'not_found_in_trash' => 'No hay videojuegos en la papelera.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'videojuegos'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-games', 
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'show_in_rest'       => true, 
    );

    register_post_type('videojuegos', $args);
}
add_action('init', 'registrar_cpt_videojuegos');

## las taxonomias personalizadas del CPT
function registrar_categorias_juegos() {

    $labels = array(
        'name'              => 'Categorías de juegos',
        'singular_name'     => 'Categoría de juego',
        'search_items'      => 'Buscar categorías',
        'all_items'         => 'Todas las categorías',
        'parent_item'       => 'Categoría padre',
        'parent_item_colon' => 'Categoría padre:',
        'edit_item'         => 'Editar categoría',
        'update_item'       => 'Actualizar categoría',
        'add_new_item'      => 'Añadir nueva categoría',
        'new_item_name'     => 'Nombre de nueva categoría',
        'menu_name'         => 'Categorías de juegos',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'categoria-juego'),
        'show_in_rest'      => true,
    );

    register_taxonomy('categoria-juego', array('videojuegos'), $args);
}
add_action('init', 'registrar_categorias_juegos');