<?php

function single_create_page() {

    if( function_exists('acf_add_options_page') ) {	
        acf_add_options_page( 
            array( 
                'page_title' => 'Informações Gerais', 
                'menu_title' => 'Informações Gerais', 
                'menu_slug'  => 'Informações Gerais', 
                'capability' => 'edit_posts', 
                'position'   => '23,3', 
                'redirect'   => false, 
                'icon_url'   => 'dashicons-info' 
        ));
    }
}
add_action( 'init', 'single_create_page' );

acf_add_options_page( 
    array( 
        'page_title' => 'API', 
        'menu_title' => 'API', 
        'menu_slug'  => 'api', 
        'capability' => 'edit_posts', 
        'position'   => '23,7', 
        'redirect'   => false, 
        'icon_url'   => 'dashicons-rest-api',
));