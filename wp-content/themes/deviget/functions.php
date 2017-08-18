<?php 


// add title-tag support

add_action( 'after_setup_theme', 'deviget_slug_setup' );

function deviget_slug_setup() {
	add_theme_support( 'title-tag' );
}