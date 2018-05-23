<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
		<?php endif; ?>

		
	</header><!-- .entry-header -->

	<div class="entry-content ">
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
        </div> <!-- content-wrapper -->
	</div><!-- .entry-content -->


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
