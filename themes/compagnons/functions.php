<?php

function files() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
} 

add_action( 'wp_enqueue_scripts', 'files' );


function my_acf_json_load_point( $paths ) {
    unset($paths[0]);

    $paths[] = get_stylesheet_directory() . '/acf-json';

    return $paths;    
}
add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' ); 


add_action( 'init', function() {
	register_post_type( 'membre-festival', array(
        'labels' => array(
            'name' => 'Membres de l&#039;équipe du festival',
            'singular_name' => 'Membre de l&#039;équipe du festival',
            'menu_name' => 'Membres de l&#039;équipe du festival',
            'all_items' => 'All cartes_employe',
            'edit_item' => 'Éditer la carte de l&#039;employé',
            'view_item' => 'Voir la carte de l&#039;employé',
            'view_items' => 'Voir les cartes des employés',
            'add_new_item' => 'Ajouter une carte d&#039;employé',
            'new_item' => 'Nouvelle carte employé',
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array(
            0 => 'title',
            1 => 'thumbnail',
            2 => 'id'
        ),
        'delete_with_user' => false,
    ) );
} );
?>


