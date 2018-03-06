<?php
/**
* The template for displaying all single posts.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="adventure-img">
					<?php while ( have_posts() ) : the_post(); ?>
					<?php the_post_thumbnail( 'category-thumb' ); ?>
				</div>
				<div class="adventure-desc">
					<h1><?php the_title(); ?></h1>
					<h2>By <?php the_author(); ?></h2>
					<?php the_content(); ?>
					<div class="social-wrap">
						<p class="white-link"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Like</a></p>
						<p class="white-link"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a></p>
						<p class="white-link"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a></p>
					</div>
				</div><!-- .adventure-desc -->
				<?php endwhile; // End of the loop. ?>
			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_footer(); ?>
