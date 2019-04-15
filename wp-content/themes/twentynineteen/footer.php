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
		<div class="nav-menu">
			<div class="contact">
				<div class="geo"><a href="#"><img src="app/images/geo.png"></a></div>
				<div class="call"><a href="#>"><img src="app/images/call.png"></a></div>
			</div>
			<?php wp_nav_menu(); ?>
			<div class="socials">
				<div class="inst"><a href="#"><img  src="app/images/instagram.png"></a></div>
				<div class="fb"><a href="#"><img  src="app/images/facebook.png"></a></div>
				<div class="tw"><a href="#"><img  src="app/images/twitter.png"></a></div>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
