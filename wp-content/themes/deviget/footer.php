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
				  
				</aside><!-- end footer-widgets -->

			<?php } ?>

				<!-- copyright -->
				<p class="copyright">
					 <?php _e('Copyright', 'deviget_theme'); ?> &copy; <?php echo date('Y'); ?> Sayed Balkhi. <?php _e('Built with', 'deviget_them'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; Sample Theme by WPBeginner</a>.
				</p>
				<!--  end copyright -->

			</footer>
			<!-- end footer -->

		</div>
		<!-- end wrapper -->

		<?php wp_footer(); ?>

	</body>
</html>
