<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php echo sprintf( __( '%s Search Results for ', 'deviget-theme' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>


		</section>
		<!-- end section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
