<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sound
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="test1" class="tester" data-stellar-background-ratio="0.5"><span class="tester-title">Our Sound - story and history</span><br /><span class="tester-deck">Howe Sound is a unique ecosystem, home to a diversity of terrestrial and aquatic species and habitats. It is also home to many coastal communities...</span></div>
			<div id="break1" class="break"><span>This place cannot survive unless...</span></div>
			<div id="test2" class="tester" data-stellar-background-ratio="0.5"><span class="tester-title">Tourism and the new Howe Sound vision</span><br /><div class="tester-deck">Howe Sound is a unique ecosystem, home to a diversity of terrestrial and aquatic species and habitats. It is also home to many coastal communities...</div></div>
			<div id="break2" class="break"><span>... people like you take a stand.</span></div>
			<div id="test3" class="tester" data-stellar-background-ratio="0.5"><span class="tester-title">Diving below the surface</span><br /><span class="tester-deck">Howe Sound is a unique ecosystem, home to a diversity of terrestrial and aquatic species and habitats. It is also home to many coastal communities...</span></div>
						<div id="break2" class="break"><span><a href="">take action now</a></span></div>


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					/*if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;*/
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
