<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main side-by-side" role="main">
			<div class="container">
				<div class="primary">
							<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<div class="social-buttons">
				<button type="button" class="black-btn"><i class="fab fa-facebook"></i> Like</button>
				<button type="button" class="black-btn"><i class="fab fa-twitter"></i> Tweet</button>
				<button type="button" class="black-btn"><i class="fab fa-pinterest"></i> Pin</button>
			</div>


			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>
				</div>
				<div class="secondary">
					<?php get_sidebar(); ?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
