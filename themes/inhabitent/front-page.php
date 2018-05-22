<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="home-hero">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/inhabitent-logo-full.svg" alt="inhabitent logo" class="logo">
            </section>
            <!-- shop stuff -->
            <section class="product-info container">
                <h2>Shop Stuff</h2>
                <div class="product-type-blocks">
                    <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/do.svg" alt="do stuff">
                        <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
                        <p>
                            <a href="#" class="btn">Do Stuff</a>
                        </p>
                    </div>
                    <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/eat.svg" alt="do stuff">
                        <p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
                        <p>
                            <a href="#" class="btn">Eat Stuff</a>
                        </p>
                    </div>
                    <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/sleep.svg" alt="do stuff">
                        <p>Get a good night's rest in the wild in a home away from home that travels well.</p>
                        <p>
                            <a href="#" class="btn">Sleep Stuff</a>
                        </p>
                    </div>
                    <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/wear.svg" alt="do stuff">
                        <p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
                        <p>
                            <a href="#" class="btn">Wear Stuff</a>
                        </p>
                    </div>
                </div>
            </section>
            <section class="latest-enteries">
                    <h2 class="uppercase">Inhabitent Journal</h2>
                    <!-- <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul> -->
            </section>
            <h2 class="uppercase adventure-title">Latest Adventures</h2>
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

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>

			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
