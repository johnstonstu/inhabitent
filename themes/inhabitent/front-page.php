<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <!-- home hero -->
            <section class="home-hero">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/inhabitent-logo-full.svg" alt="inhabitent logo" class="logo">
            </section>
            <!-- shop stuff -->
            <section class="product-info container">
                <h2 class="home-title">Shop Stuff</h2>
                <div class="product-type-blocks">

                <?php $terms = get_terms( array (
                    'taxonomy' => 'product_type',
                    'hide-empty' => 0,
                ));

                if (! empty( $terms) && ! is_wp_error( $terms )) : ?>
                    
                    <?php foreach($terms as $term) : ?>

                    <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/<?php echo $term ->slug;?>.svg" alt="do stuff">
                        <p><?php echo $term ->description; ?></p>
                        <p>
                            <a href="<?php echo get_term_link($term) ?>" class="btn"><?php echo $term ->name; ?> Stuff</a>
                        </p>
                    </div>

                <?php endforeach; ?>

                <?php  endif; ?>
                </div>
            </section>


            <section class="latest-enteries">
                <div class="container">
                     <h2 class="home-title">Inhabitent Journal</h2>
                     <ul>
            <?php
                $args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3 );
                $product_posts = get_posts( $args ); // returns an array of posts
            ?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
                <?php
                // the_post_thumbnail('large');
                // the_content();
                ?>
                            <li>
                                <div class="thumbnail-wrapper">
                                    <?php the_post_thumbnail('large'); ?>
                                </div>
                                <div class="post-info-wrapper">
                                    <span class="entry-meta">
                                        <?php red_starter_posted_on(); ?> / <?php comments_number( '0 comments', '0 comments', '% comments'); ?>
                                        <h2 class="entry-title">
                                            <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2>
                                    </span>
                                </div>
                                <a href="<?php echo the_permalink(); ?>" class="black-btn">Read Entry</a>
                            </li>
            <?php endforeach; wp_reset_postdata(); ?>                        
                        </ul>
                </div>
            </section> 


            <!-- adventures -->
            <h2 class="home-title">Latest Adventures</h2>
            <section class="adventures">
                <div class="adventure-grid">
                    <div class="grid-item-1">
                        <div class="story-info">
                            <h3 class="story-title">
                                <a href="#">Getting Back to Nature in a Canoe</a>
                            </h3>
                            <a href="#" class="white-btn uppercase">Read more</a>
                        </div>
                    </div>
                    <div class="grid-item-2">
                        <div class="story-info">
                            <h3 class="story-title">
                                <a href="#">A Night with Friends at the Beach</a>
                            </h3>
                            <a href="#" class="white-btn uppercase">Read more</a>
                        </div>
                    </div>
                    <div class="grid-item-3">
                        <div class="story-info">
                            <h3 class="story-title">
                                <a href="#">Taking in the View at Big Mountain</a>
                            </h3>
                            <a href="#" class="white-btn uppercase">Read more</a>
                        </div>
                    </div>
                    <div class="grid-item-4">
                        <div class="story-info">
                            <h3 class="story-title">
                                <a href="#" class="story-link">Star-Gazing at the Night Sky</a>
                            </h3>
                            <a href="#" class="white-btn uppercase">Read more</a>
                        </div>
                    </div>
                </div>
            </section>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
