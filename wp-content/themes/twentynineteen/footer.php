<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="contact-block">
				<div class="contact">
					<div class="geo"><a href="#"><img src="http://webcap.com/wp-content/uploads/2019/04/geo.png"></a></div>
					<div class="call"><a href="#>"><img src="http://webcap.com/wp-content/uploads/2019/04/call.png"></a></div>
				</div>
			</div>
			<div class="nav-menu">
				<?php wp_nav_menu(); ?>
				<div class="status-bar">
					<span class="bold-bar"></span>
					<span class="thin-bar"></span>
				</div>
			</div>
			<div class="socials">
				<div class="inst"><a href="#"><img  src="http://webcap.com/wp-content/uploads/2019/04/instagram.png"></a></div>
				<div class="fb"><a href="#"><img  src="http://webcap.com/wp-content/uploads/2019/04/facebook.png"></a></div>
				<div class="tw"><a href="#"><img  src="http://webcap.com/wp-content/uploads/2019/04/twitter.png"></a></div>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
