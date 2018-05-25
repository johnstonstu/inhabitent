<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="container">


            		<?php if ( have_posts() ) : ?>

			<header class="page-header">
                <?php $term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy'), get_query_var('description') ); ?>
                <h1 class="page-title"><?php echo $term->name;?></h1>
                <p class="taxonomy-description"><?php echo $term->description; ?></p>
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
