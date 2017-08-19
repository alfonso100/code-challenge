		</div><!-- end wrapper -->

		<!-- footer -->
			<footer class="footer" role="contentinfo">	
			
		 	<?php 
		 		// we will count the active widgets to hide/show the footer widgets section if all items are hidden
					$columns = 0;
					if(is_active_sidebar( 'sidebar-footer-1'  )) { $columns ++; }
					if(is_active_sidebar( 'sidebar-footer-2'  )) { $columns ++; }
					if(is_active_sidebar( 'sidebar-footer-3'  )) { $columns ++; }

			?>

			<?php if( $columns > 0 ) { ?>
			
				<aside class="footer-widgets" role="complementary">

				<div class="wrapper">

				<?php if(is_active_sidebar( 'sidebar-footer-1'  )) { ?>
				    <div class="columns-<?php echo $columns?>">
				        <?php dynamic_sidebar( 'sidebar-footer-1' ); ?>
				    </div><!-- footer-widget-1 -->
				 <?php } ?>

				<?php if(is_active_sidebar( 'sidebar-footer-2'  )) { ?>
				    <div class="columns-<?php echo $columns?>">
				        <?php dynamic_sidebar( 'sidebar-footer-2' ); ?>
				    </div><!-- footer-widget-1 -->
				 <?php } ?>

				<?php if(is_active_sidebar( 'sidebar-footer-3'  )) { ?>
				    <div class="columns-<?php echo $columns?>">
				        <?php dynamic_sidebar( 'sidebar-footer-3' ); ?>
				    </div><!-- footer-widget-1 -->
				 <?php } ?>				

				  </div> <!-- wrapper -->
				<div class="clear"></div>
				</aside><!-- end footer-widgets -->

			<?php } ?>

				<!-- copyright -->
				<div class="copyright">
					<div class="wrapper">
						<p>
						 <?php _e('Copyright', 'deviget-theme'); ?> &copy; <?php echo date('Y'); ?> Sayed Balkhi. <?php _e('Built with', 'deviget-theme'); ?>
						<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; Sample Theme by WPBeginner</a>.
						</p>
					 </div> <!-- wrapper -->
				
				</div>
				<!--  end copyright -->

			</footer>
			<!-- end footer -->

		<div class="search-box">
			<div class="wrapper">
			<a class="search-close" href="#">x</a>
			<!-- search -->
			<form  method="get" action="<?php echo home_url(); ?>" role="search">
				<input class="search-input" type="search" name="s" placeholder="<?php _e( 'To search, type and hit enter.', 'deviget-theme' ); ?>">
			</form>
			<!-- end search -->

		  </div>
		 </div><!-- end searchbox -->

		<?php wp_footer(); ?>

	</body>
</html>
