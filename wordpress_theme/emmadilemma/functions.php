<?php
    // include custom jQuery
	function shapeSpace_include_custom_jquery() {

		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

	}
	add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

    //add scripts and stylesheets
    function enqueue_emmadilemma_styles() {
        wp_enqueue_script( 'materialize-js','//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js', array('jquery'));
        wp_enqueue_script('main-js','/wp-content/themes/emmadilemma/js/main.js', array('jquery'));
        wp_enqueue_style('normalize','//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css');
        wp_enqueue_style('materialize-icons', '//fonts.googleapis.com/icon?family=Material+Icons');
        wp_enqueue_style('materialize', '//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css');
        wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Montserrat');
        wp_enqueue_style('emmadilemma-style',get_stylesheet_uri() );
    }

    add_action("wp_enqueue_scripts", "enqueue_emmadilemma_styles");

    // Register a custom primary navigation menu
    function customtheme_setup() {
    register_nav_menus( array(
        "primary" => __( "Primary Menu", "CustomTheme" )
        ));
        //Add theme support for document title tag
        add_theme_support( 'title-tag' );
}
 add_action("after_setup_theme", "customtheme_setup");

 add_theme_support( 'post-thumbnails' );

 // Custom Post Types
 function cptui_register_my_cpts_post_headline_two() {

	/**
	 * Post Type: Posts Subheader.
	 */

	$labels = array(
		"name" => __( 'Posts Subheader', '' ),
		"singular_name" => __( 'Post Subheader', '' ),
		"menu_name" => __( 'Post Sub Headline', '' ),
	);

	$args = array(
		"label" => __( 'Posts Subheader', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "post_headline_two", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 3,
		"supports" => array( "title", "editor", "thumbnail", "post-formats" ),
	);

	register_post_type( "post_headline_two", $args );
}

add_action( 'init', 'cptui_register_my_cpts_post_headline_two' );



?>
