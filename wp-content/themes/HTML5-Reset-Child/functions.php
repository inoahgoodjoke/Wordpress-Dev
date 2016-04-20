<?php
function theme_enqueue_styles() {

	// Load Parent and Child Theme Files

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
	
	// Load Bootstrap Files
	
	wp_enqueue_style( 'bootstrap-min',
		get_stylesheet_directory_uri() . '/css/bootstrap.min.css'
	);
	wp_enqueue_style( 'bootstrap-theme-min',
		get_stylesheet_directory_uri() . '/css/bootstrap-theme.min.css'
	);
	wp_enqueue_script( 'bootstrap-min',
		get_stylesheet_directory_uri() . '/js/bootstap.min.js',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
?>

body {
	font-family: Papyrus, fantasy;
}