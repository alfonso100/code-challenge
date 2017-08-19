<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'deviget-theme' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h2><?php comments_number(); ?></h2>

	<ul>
		<?php wp_list_comments(); ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments are closed.', 'deviget-theme' ); ?></p>

<?php endif; ?>

<?php comment_form(); ?>

<?php paginate_comments_links() ?>

<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>


<?php
 	$defaults = array(
		'before'           => '<p>' .  _e( 'Pages.', 'deviget-theme' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     =>  _e( 'Next page.', 'deviget-theme' ),
		'previouspagelink' =>  _e( 'Previous page.', 'deviget-theme' ),
		'pagelink'         => '%',
		'echo'             => 1
	);
 
        wp_link_pages( $defaults );

?>


</div>
