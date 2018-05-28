<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content single-product">
        <div class="product-image">
            <?php the_post_thumbnail( 'large' ); ?>
        </div>
        <div class="content-wrapper">
            <div class="product-title">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </div>
            <div class="product-price">
                <?php echo CFS()->get( 'price' ); ?>
            </div>
            <div class="product-content">
                <?php the_content(); ?>
            </div>
            <div class="social-buttons">
				<button type="button" class="black-btn"><i class="fab fa-facebook"></i> Like</button>
				<button type="button" class="black-btn"><i class="fab fa-twitter"></i> Tweet</button>
				<button type="button" class="black-btn"><i class="fab fa-pinterest"></i> Pin</button>
			</div>
        </div> <!-- content-wrapper -->
	</div><!-- .entry-content -->


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
