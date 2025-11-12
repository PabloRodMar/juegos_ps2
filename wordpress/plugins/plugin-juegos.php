<?php
/*
    Plugin Name: Post Personalizado
    Description: Crear un post personalizado
    Version: 1.0.0
    Author: Rayco
    Text Domain: raycothemess
*/

if(!defined('ABSPATH')) die();

// Registrar
function raycothemess_videojuegos_post_type() {

	$labels = array(
		'name'                  => _x( 'Videojuegos', 'Post Type General Name', 'raycothemess' ),
		'singular_name'         => _x( 'Videojuegos', 'Post Type Singular Name', 'raycothemess' ),
		'menu_name'             => __( 'Videojuegos', 'raycothemess' ),
		'name_admin_bar'        => __( 'Videojuegos', 'raycothemess' ),
		'archives'              => __( 'Archivo', 'raycothemess' ),
		'attributes'            => __( 'Atributos', 'raycothemess' ),
		'parent_item_colon'     => __( 'Videojuegos Padre', 'raycothemess' ),
		'all_items'             => __( 'Todas Las Videojuegos', 'raycothemess' ),
		'add_new_item'          => __( 'Agregar Videojuegos', 'raycothemess' ),
		'add_new'               => __( 'Agregar Videojuegos', 'raycothemess' ),
		'new_item'              => __( 'Nueva Videojuegos', 'raycothemess' ),
		'edit_item'             => __( 'Editar Videojuegos', 'raycothemess' ),
		'update_item'           => __( 'Actualizar Videojuegos', 'raycothemess' ),
		'view_item'             => __( 'Ver Videojuegos', 'raycothemess' ),
		'view_items'            => __( 'Ver Videojuegos', 'raycothemess' ),
		'search_items'          => __( 'Buscar Videojuegos', 'raycothemess' ),
		'not_found'             => __( 'No Encontrado', 'raycothemess' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'raycothemess' ),
		'featured_image'        => __( 'Imagen Destacada', 'raycothemess' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'raycothemess' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'raycothemess' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'raycothemess' ),
		'insert_into_item'      => __( 'Insertar en Videojuegos', 'raycothemess' ),
		'uploaded_to_this_item' => __( 'Agregado en Videojuegos', 'raycothemess' ),
		'items_list'            => __( 'Lista de Videojuegos', 'raycothemess' ),
		'items_list_navigation' => __( 'Navegación de Videojuegos', 'raycothemess' ),
		'filter_items_list'     => __( 'Filtrar Videojuegos', 'raycothemess' ),
	);
	$args = array(
		'label'                 => __( 'Videojuegos', 'raycothemess' ),
		'description'           => __( 'Videojuegos para el Sitio Web', 'raycothemess' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Videojuegos', $args );

}
add_action( 'init', 'raycothemess_Videojuegos_post_type', 0 );