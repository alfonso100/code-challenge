<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- posts loop here -->
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
				</div>
				<!-- end post details -->

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail('featured-image');  ?>
					</a>
				<?php endif; ?>
				<!-- end post thumbnail -->


				<?php the_excerpt();  ?> 

				<hr />
				<p class="categories"><?php _e( 'Categories: ', 'deviget-theme' ); ?> <?php echo get_the_category_list(', '); ?></p>
				<p class="readmore"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php _e( 'Continue reading &raquo;', 'deviget-theme' ); ?></a></p>


			
			</article>
			<!-- end article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>
				<h2><?php _e( 'Sorry, nothing to display.', 'deviget-theme' ); ?></h2>
			</article>
			<!-- end article -->

		<?php endif; ?>
		
		<?php the_posts_navigation(); ?>

		</section>
		<!-- end section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
