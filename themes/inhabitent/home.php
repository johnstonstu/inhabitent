<?php
/**
 *  template for journal page (blog index)
 *
 * @package Inhabitent_Theme
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
							// Inhabitent_posted_on(); 
							// <?php comments_number( '0 comments', '0 comments', '% comments');
							// the_author();
							// the_content(); 
					?>
					
					
					<header class="entry-header">
						<?php the_post_thumbnail( 'large' );?>
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						<div class="entry-meta">
							<span class="posted-on">
								<?php Inhabitent_posted_on(); ?> / 
							</span>
							<?php comments_number( '0 comments', '0 comments', '% comments'); ?> /
							<span class="posted-by">
								By <?php the_author();?>
							</span>
						</div>
					</header>
					<div class="entry-content">
						<p><?php the_content() ?></p>
						<p>
							<a href="<?php echo esc_url( get_permalink() ) ?>" class="read-more black-btn">Read More</a>
						</p>
					</div>

					<?php endforeach; wp_reset_postdata(); ?>

			</div>
			<div class="secondary widget-area">
				<?php get_sidebar(); ?>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
