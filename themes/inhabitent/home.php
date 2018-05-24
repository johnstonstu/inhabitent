<?php
/**
 *  template for journal page (blog index)
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main side-by-side" role="main">
		<div class="container">
			<div class="primary">

				<?php
					$args = array( 'post_type' => 'post', 'order' => 'ASC' );
					$product_posts = get_posts( $args ); // returns an array of posts
					?>
					<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
					<?php 
							// the_post_thumbnail( 'large' );
							// the_title();
							// red_starter_posted_on(); 
							// <?php comments_number( '0 comments', '0 comments', '% comments');
							// the_author();
							// the_content(); 
					?>
					
					
					<?php the_post_thumbnail( 'large' );?>
					<h2 class="entry-title">
						<a href="<?php echo the_permalink( post )?>"> <?php the_title();?> </a>
					</h2>
					<div class="entry-meta">
						<span class="posted-on">
							<?php comments_number( '0 comments', '0 comments', '% comments'); ?>
						</span>
						<span class="posted-by">
							By <?php the_author();?>
							<?php get_the_date(); ?>
						</span>
					</div>

					<?php endforeach; wp_reset_postdata(); ?>

			</div>
			<div class="secondary">
				
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
