<?php

function files() {
    wp_enqueue_style('style', get_stylesheet_uri() );
    wp_enqueue_script("main", "/wp-content/themes/compagnons/js/main.js", array(), "",  array( 'strategy' => 'defer'));
    wp_enqueue_script("accueil", "/wp-content/themes/compagnons/js/accueil.js", array(), "",  array( 'strategy' => 'defer'));
    wp_enqueue_script("accueil_rdv", "/wp-content/themes/compagnons/js/accueil_rdv.js", array(), "",  array( 'strategy' => 'defer'));
    wp_enqueue_script("_accordion", "/wp-content/themes/compagnons/js/classes/_accordion.js", array(), "",  array( 'strategy' => 'defer'));
    wp_enqueue_script("_header", "/wp-content/themes/compagnons/js/classes/_header.js", array(), "",  array( 'strategy' => 'defer'));
    wp_enqueue_script('accueil_compagnons', "/wp-content/themes/compagnons/js/accueil_compagnons.js", array(), "",  array( 'strategy' => 'defer'));
    wp_enqueue_script('jquery', "//code.jquery.com/jquery-1.11.0.min.js", array(), "",  array( 'strategy' => 'defer'));
    wp_enqueue_script('jquery-migrate', "//code.jquery.com/jquery-migrate-1.2.1.min.js", array(), "",  array( 'strategy' => 'defer'));
    wp_enqueue_script('slick-js', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array(), "",  array( 'strategy' => 'defer'));
    wp_enqueue_script("_slick_slider", "/wp-content/themes/compagnons/js/classes/_slick_slider.js", array(), "",  array( 'strategy' => 'defer'));
}; 

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

add_action( 'init', function() {
	register_post_type( 'image-carousel', array(
	'labels' => array(
		'name' => 'images-carousel',
		'singular_name' => 'image-carousel',
		'menu_name' => 'images-carousel',
		'all_items' => 'All images-carousel',
		'edit_item' => 'Edit image-carousel',
		'view_item' => 'View image-carousel',
		'view_items' => 'View images-carousel',
		'add_new_item' => 'Add New image-carousel',
		'new_item' => 'New image-carousel',
		'parent_item_colon' => 'Parent image-carousel:',
		'search_items' => 'Search images-carousel',
		'not_found' => 'No images-carousel found',
		'not_found_in_trash' => 'No images-carousel found in Trash',
		'archives' => 'image-carousel Archives',
		'attributes' => 'image-carousel Attributes',
		'insert_into_item' => 'Insert into image-carousel',
		'uploaded_to_this_item' => 'Uploaded to this image-carousel',
		'filter_items_list' => 'Filter images-carousel list',
		'filter_by_date' => 'Filter images-carousel by date',
		'items_list_navigation' => 'images-carousel list navigation',
		'items_list' => 'images-carousel list',
		'item_published' => 'image-carousel published.',
		'item_published_privately' => 'image-carousel published privately.',
		'item_reverted_to_draft' => 'image-carousel reverted to draft.',
		'item_scheduled' => 'image-carousel scheduled.',
		'item_updated' => 'image-carousel updated.',
		'item_link' => 'image-carousel Link',
		'item_link_description' => 'A link to a image-carousel.',
	),
	'public' => true,
	'show_in_rest' => true,
	'menu_icon' => 'dashicons-format-image',
	'supports' => array(
		0 => 'title',
		1 => 'editor',
		2 => 'thumbnail',
	),
	'delete_with_user' => false,
) );
} );



    //SETTING LOGO

    function logo_setup(){
        add_theme_support("custom-logo", array(
            "width" => 473,
            "height" => 204,
            "flex-width" => true,
            "flex-height" => true,
        ));
    };

    add_action("after_setup_theme", "logo_setup");

?>