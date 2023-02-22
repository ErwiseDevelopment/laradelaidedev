<?php

function erwise_create_post_type() { 
    register_post_type( 'depoimento', array(
        'labels' 		=> array( 'name' => 'Depoimentos', 'singular_name' => 'Depoimento' ),
        'public' 		=> true,
        'has_archive'	=> true,
        'menu_icon'		=> 'dashicons-format-quote',
        'supports' 		=> array( 'title', 'editor' ) 
    ));
}

add_action( 'init', 'erwise_create_post_type' );

//Criar taxonomia:
function erwise_create_taxonomy() {
	register_taxonomy( 'funcao', 'equipe', array( 'labels' => array( 'name' => 'Função', 'singular_name' => 'Função' ), 'hierarchical' => true, 'show_admin_column' => true ) );
    }
add_action( 'init', 'erwise_create_taxonomy' );