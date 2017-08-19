<?php 
/**
 * Template Name: Full Width Page
 */


get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<h1><?php the_title(); ?></h1>

				<?php the_content(); ?>

				

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'deviget-theme' ); ?></h2>

			</article>
			<!-- end article -->

		<?php endif; ?>

		</section>
		<!-- end section -->
	</main>

<?php get_footer(); ?>
