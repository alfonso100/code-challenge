<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



			<!-- post title -->
				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<!-- end post title -->

				<!-- post details -->
				<div class="post-meta">
				<span class="author"><?php _e( 'by', 'deviget-theme' ); ?> <?php the_author_posts_link(); ?></span> 
				<span class="date"><?php _e( 'on', 'deviget-theme' ); ?> <?php the_time('F j, Y'); ?></span>
					<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'deviget-theme' ), __( '1 Comment', 'deviget-theme' ), __( '% Comments', 'deviget-theme' )); ?></span>
				</div>
				<!-- end post details -->

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail('full');  ?>
					</a>
				<?php endif; ?>
				<!-- end post thumbnail -->


		
			<!-- post details -->

			<?php the_content();  ?>

			<hr />
			
			<p class="categories"><?php _e( 'Categories: ', 'deviget-theme' ); ?> <?php echo get_the_category_list(', '); ?> - <?php the_tags(); ?></p>


			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'deviget-theme' ); ?></h1>

		</article>
		<!-- end article -->

	<?php endif; ?>

	</section>
	<!-- end section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
