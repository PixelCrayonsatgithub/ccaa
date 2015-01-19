<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Ccaa
 * @since Ccaa 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container"><?php //get_sidebar( 'main' ); ?><div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="row">
			<div class="footer_left">
				
				<div class="footer-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'footer-menu', 'menu' => 'footer-menu' ) ); ?>
				</div>
				<div class="copyright">
					<?php dynamic_sidebar('copyright'); ?>
				</div>
			</div>
			<div class="footer_right">
				<?php dynamic_sidebar('social_icons'); ?>
			</div></div></div></div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
	
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/easyResponsiveTabs.js" type="text/javascript"></script>
<!-- SCRIPTS -->
<script type='text/javascript' src='<?php bloginfo('template_url');?>/js/jquery.visible.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url');?>/js/jquery.parallax.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url');?>/js/script.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url');?>/js/jquery.stylish-select.js'></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/custom.js"></script>
</body>
</html>