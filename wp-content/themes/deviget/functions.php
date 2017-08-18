<?php 


// add title-tag support
function deviget_slug_setup() {

	add_theme_support( 'title-tag' );

} 
add_action( 'after_setup_theme', 'deviget_slug_setup' );
// title tag-suport end


// header menu
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
// header menu end


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



// custom backgrounds
add_theme_support( 'custom-background' );
// custom backgrounds end

?>