<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
            <div class="container">
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
                        <div class="shop-grid-info">
                            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                            <?php get_template_part( 'template-parts/product' );?>
                            <?php echo CFS()->get( 'price' ); ?>
                        </div>
                        </a>
                    </div>
      

                <?php endwhile; ?>
                <?php else : ?>


          </div>
		<?php endif; ?>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
