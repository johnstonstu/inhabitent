<?php
/**
 * The template for displaying archive product pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="container">


            		<?php if ( have_posts() ) : ?>

			<header class="page-header">
                    <h1 class="page-tlte"><?php the_archive_title()?></h1>

                <?php $terms = get_terms( array (
                    'taxonomy' => 'product_type',
                    'hide-empty' => 0,
                ));

                if (! empty( $terms) && ! is_wp_error( $terms )) : ?>
                    
                    <?php foreach($terms as $term) : ?>
                            <a href="<?php echo get_term_link($term) ?>" class="btn"><?php echo $term ->name; ?></a>
                <?php endforeach; ?>

                <?php  endif; ?>

			</header><!-- .page-header -->



        <div class="shop-grid">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

        
                <div class="shop-grid-item">
                        <a href="<?php echo esc_url( get_permalink() ) ?>">
                            <div class="thumbnail-wrapper">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'large' ); ?>
                                <?php endif; ?>
                            </div>
                        </a>
                        <div class="shop-grid-info">
                            <h2 class="entry-title">
                                <?php the_title() ?>
                            </h2>
                            <p class="dots">
                                
                            </p>
                            <span class="shop-price">
                                <?php echo CFS()->get( 'price' ); ?>
                            </span>
                        </div>
                </div>
      

                <?php endwhile; ?>
                <?php else : ?>


        </div> <!-- shop-grid -->
            </div>

		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
