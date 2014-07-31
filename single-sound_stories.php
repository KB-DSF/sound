<?php
/**
 * The template for displaying all single posts.
 *
 * @package sound
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="tester" data-stellar-background-ratio="0.5"
				style="background-image:url(<?php if ( has_post_thumbnail() ) {
				  $featured_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
					echo $featured_image_url[0];
					} ?>);">
			<h2 class="test" data-stellar-ratio="3">TEST</h2>
			</div>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php sound_post_nav(); ?>


		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>