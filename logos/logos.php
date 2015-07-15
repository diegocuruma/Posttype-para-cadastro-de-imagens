<?php

/*
Plugin Name: Modulo Logos Dev
Plugin URI: http://www.dev-undergrounnd.com.br
Description: Modulo Logos Dev
Version: 1.0
Author: diego curumim (DEV)
Author URI: http://www.dev-undergrounnd.com.br
*/


// logos 
function logo() {
	$labels = array(
		'name'                => 'Logos',
		'singular_name'       => 'Logos',
		'menu_name'           => 'Logos',
		'parent_item_colon'   => 'Logos Pai:',
		'all_items'           => 'Todas as Logos',
		'view_item'           => 'Ver Logos',
		'add_new_item'        => 'Adicionar Nova Logo',
		'add_new'             => 'Nova Logo',
		'edit_item'           => 'Editar Logo',
		'update_item'         => 'Atualizar Logos',
		'search_items'        => 'Buscar Logos',
		'not_found'           => 'Nenhuma Logo Encontrado',
		'not_found_in_trash'  => 'Nenhuma Logo Encontrado na Lixeira',
	);
	$rewrite = array(
		'slug'                => 'logo',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => false,
	);
	$args = array(
		'label'               => 'Logos',
		'description'         => 'Logos',
		'labels'              => $labels,
		'supports'            => array( 'title', 'false', 'thumbnail' ),
		'taxonomies'          => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => false,
		'menu_icon'           => 'dashicons-format-gallery',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'query_var'           => 'logo',
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'logo', $args );
}

add_action( 'init', 'logo', 0 );


function tax(){
    register_taxonomy( 'categoria', 'logo', array( 'label' => __( 'Categoria' ), 'rewrite' => array( 'slug' => 'categoria' ), 'hierarchical' => true, ) ); 
}

add_action( 'init', 'tax' );