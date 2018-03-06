<?php/* Template Name: About Us Template */?>
<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<h2>Our Story</h2>
					<?php echo cfs()->get('our-story'); ?>
				<h2>Our Team</h2>
					<?php echo cfs()->get('our-team'); ?>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
