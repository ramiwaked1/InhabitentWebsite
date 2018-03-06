<?php
/**
* The template for displaying archive pages.
*
* @package inhabitent
*/

get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

<?php if ( have_posts() ) : ?>

<header class="page-header">
<h1 class="products-archive-heading">shop stuff<h1>

<?php 

$terms = get_terms( array(
		'taxonomy' => 'product-type',
		'hide_empty' => 0,
) );

if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :?>

<ul class="products-archive-type-list">

	<?php foreach ( $terms as $term ) : ?>

		<li>
			<p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?></a></p>
		</li>

	<?php endforeach; ?>
</ul>


<?php endif; ?>

</header><!-- .page-header -->


<ul class="products-archive-list">
	<?php
		$args = array( 'post_type'=>'products','posts_per_page'=>16);
		$posts = get_posts( $args ); // returns an array of posts
	?>
	<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
		<li>
			<div class="products-archive-image-wrapper">
			<a href="<?php echo the_permalink()?>"><?php the_post_thumbnail('medium');?></a>
			</div>
			<div class="products-archive-text-wrapper">
				<span><?php the_title();?></span><span class="dots">
				<?php echo CFS()->get('price');?></span>
			</div>
		</li>
	<?php endforeach; wp_reset_postdata(); ?>
</ul>

<?php else : ?>

<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
