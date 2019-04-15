<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container">
		<div class="row">
			<div class="col col-lg-4">
				<div class="content">
					<div class="title"><h1><?php the_title();?></h1></div>

					<div class="entry-content"><?php the_content();?></div>
				</div>
				
			</div>
			<div class="col col-lg-8">
				<div class="img-block"><?php the_post_thumbnail() ?></div>
			</div>
		</div>
	</div>

	

</article><!-- #post-<?php the_ID(); ?> -->
