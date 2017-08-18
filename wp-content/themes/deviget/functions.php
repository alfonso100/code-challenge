<?php 


// add title-tag support
add_action( 'after_setup_theme', 'deviget_slug_setup' );

function deviget_slug_setup() {
	
	add_theme_support( 'title-tag' );

} // title tag-suport end



// theme sidebars
if ( function_exists('register_sidebar') ) {

	// main content sidebar
   	register_sidebar(array(
	   'name' => 'Sidebar',
	   'id' => 'sidebar-1',  
	   'before_widget' => '<div id="%1$s" class="widget %2$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h2>',
	   'after_title' => '</h2>'
    ));

 	// Footer sidebars
  	register_sidebar(array(
	   'name' => 'Footer  1',
	   'id' => 'sidebar-footer-1',  
	   'before_widget' => '<div id="%1$s" class="widget %2$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h2>',
	   'after_title' => '</h2>'
   	));

   	register_sidebar(array(
	   'name' => 'Footer 2',
	   'id' => 'sidebar-footer-2',  
	   'before_widget' => '<div id="%1$s" class="widget %2$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h2>',
	   'after_title' => '</h2>'
   	));

   	register_sidebar(array(
	   'name' => 'Footer 3',
	   'id' => 'sidebar-footer-3',  
	   'before_widget' => '<div id="%1$s" class="widget %2$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h2>',
	   'after_title' => '</h2>'
   	));

} // theme sidebars end



?>