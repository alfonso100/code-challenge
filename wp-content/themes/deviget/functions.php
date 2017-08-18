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


// theme widgets


// 1 - social widget
class Social_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'social_widget', // Base ID
			esc_html__( 'Social Widget', 'deviget_theme' ), // Name
			array( 'description' => esc_html__( 'Social networks', 'deviget_theme' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['twitter'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		echo esc_html__( 'Hello, World!', 'deviget_theme' );
		echo $args['after_widget'];
	}

	public function form( $instance ) {

		$twitter 	= ! empty( $instance['twitter'] ) ? $instance['twitter'] : esc_html__( '', 'deviget_theme' );
		$facebook 	= ! empty( $instance['facebook'] ) ? $instance['facebook'] : esc_html__( '', 'deviget_theme' );
		$pinterest 	= ! empty( $instance['pinterest'] ) ? $instance['pinterest'] : esc_html__( '', 'deviget_theme' );
		$google_plus 	= ! empty( $instance['google_plus'] ) ? $instance['google_plus'] : esc_html__( '', 'deviget_theme' );
		$rss 	= ! empty( $instance['rss'] ) ? $instance['rss'] : esc_html__( '', 'deviget_theme' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"><?php esc_attr_e( 'Twitter URL:', 'deviget_theme' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>" type="text" value="<?php if($twitter) { echo esc_attr( $twitter ); } ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"><?php esc_attr_e( 'Facebook URL:', 'deviget_theme' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" type="text" value="<?php if($facebook) { echo esc_attr( $facebook ); }?>">
		</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'google_plus' ) ); ?>"><?php esc_attr_e( 'Google Plus URL:', 'deviget_theme' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'google_plus' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'google_plus' ) ); ?>" type="text" value="<?php if($google_plus) { echo esc_attr( $google_plus ); }?>">
		</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'rss' ) ); ?>"><?php esc_attr_e( 'RSS  URL:', 'deviget_theme' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'rss' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'rss' ) ); ?>" type="text" value="<?php if($rss) { echo esc_attr( $rss ); }?>">
		</p>

		<?php 
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['twitter'] 		= ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
		$instance['facebook'] 		= ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
		$instance['pinterest'] 		= ( ! empty( $new_instance['pinterest'] ) ) ? strip_tags( $new_instance['pinterest'] ) : '';
		$instance['google_plus'] 	= ( ! empty( $new_instance['google_plus'] ) ) ? strip_tags( $new_instance['google_plus'] ) : '';
		$instance['rss'] 			= ( ! empty( $new_instance['rss'] ) ) ? strip_tags( $new_instance['rss'] ) : '';

		return $instance;
	}

} // class Social_Widget


// register Social_Widget widget
function register_social_widget() {
    register_widget( 'Social_Widget' );
}
add_action( 'widgets_init', 'register_social_widget' );
// 1 - social widget end


// 2 - about widget
class About_Widget extends WP_Widget
{

  public function __construct()
  {
    parent::__construct(
      'about-widget',
      'About Widget',
      array(
        'description' => 'About me + image upload widget'
      )
    );
  }

  public function widget( $args, $instance )
  {
    // basic output just for this example
    echo '<a href="#">
      <img src="'.esc_url($instance['image_uri']).'" />
      <h4>'.esc_html($instance['image_uri']).'</h4>
    </a>';
  }

  public function form( $instance ) {
   	
   	$image_uri 		= ! empty( $instance['image_uri'] ) ? $instance['image_uri'] : esc_html__( '', 'deviget_theme' );
   	$name 			= ! empty( $instance['name'] ) ? $instance['name'] : esc_html__( '', 'deviget_theme' );
   	$description 	= ! empty( $instance['description'] ) ? $instance['description'] : esc_html__( '', 'deviget_theme' );

    ?>

    <p class="about-widget-image-container" <?php if(!$image_uri) { ?> style="display:none" <?php } ?>><img class="about-widget-image" src="<?php echo esc_attr( $image_uri ); ?>"></p>
	<p>
	<label for="<?php echo esc_attr( $this->get_field_id( 'image_uri' ) ); ?>"><?php esc_attr_e( 'Image:', 'deviget_theme' ); ?></label> 
	<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'image_uri' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'image_uri' ) ); ?>" type="text" value="<?php if($image_uri) { echo esc_attr( $image_uri ); }?>">
	<input type="button" class="upload_image_button" value="Select Image" />
	</p>


	<p>
	<label for="<?php echo esc_attr( $this->get_field_id( 'name' ) ); ?>"><?php esc_attr_e( 'Name:', 'deviget_theme' ); ?></label> 
	<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'name' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'name' ) ); ?>" type="text" value="<?php if($name) { echo esc_attr( $name ); }?>">
	</p>

	<p>
	<label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>"><?php esc_attr_e( 'Description:', 'deviget_theme' ); ?></label> 
	<textarea rows="6" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" type="text"><?php if($description) { echo esc_attr( $description ); }?></textarea>
	</p>
	

    <?php
  }

  public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['name'] 			= ( ! empty( $new_instance['name'] ) ) ? strip_tags( $new_instance['name'] ) : '';
		$instance['description'] 	= ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';
		$instance['image_uri'] 		= ( ! empty( $new_instance['image_uri'] ) ) ? strip_tags( $new_instance['image_uri'] ) : '';

		return $instance;
	}


} 
// end class

// register About_Widget widget
function register_about_widget() {
    register_widget( 'About_Widget' );
}
add_action( 'widgets_init', 'register_about_widget' );


// queue up the necessary js
function aboutwidget_enqueue()
{
  wp_enqueue_style('thickbox');
  wp_enqueue_script('media-upload');
  wp_enqueue_script('thickbox');
  wp_enqueue_script('aw', get_template_directory_uri().'/assets/js/widget_image_upload.js', null, null, true);
}
add_action('admin_enqueue_scripts', 'aboutwidget_enqueue');

// 2 - about widget end



