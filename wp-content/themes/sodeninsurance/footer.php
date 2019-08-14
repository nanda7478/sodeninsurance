<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4">
						<?php dynamic_sidebar('footer-1'); ?>
					</div>
					<div class="col-lg-6 col-md-8">
						<?php dynamic_sidebar('footer-2'); ?>
						<?php dynamic_sidebar('footer-4'); ?>
						<?php dynamic_sidebar('footer-5'); ?>
					</div>
					<div class="col-lg-3 col-md-12">
						<?php dynamic_sidebar('footer-3'); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
				<div class="f-logos">		<?php dynamic_sidebar('footer_logo'); ?> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">				
							<span class="site-inf">
								<p>COPYRIGHT <?php echo date("Y"); ?> © <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							</span>
					</div>
				</div>
			</div>
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
<script type="text/javascript">	
	jQuery(document).ready(function(){
		jQuery("#menu-toggle").click(function(){
			jQuery('body').toggleClass( "modile-menu" );
		});
		// jQuery(".dropdown-toggle").click(function(){
		// 	deepak = jQuery(this).attr('aria-expanded');
		// 	if (deepak == 'true') {
		// 		// jQuery('.sub-menu').css("display", "none");
		// 	};
		// });
	});
</script>


