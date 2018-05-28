<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function Inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'Inhabitent_body_classes' );

function inhabitent_dynamic_css(){

	// make sure about page is loaded
	if (! is_page_template( 'page-templates/about.php' )){
		return;
	}

	//get background image from custom field
	$image = CFS()->get('hero_image');

	if(! $image){
		return;
	}

	//add custom css
	$hero_css = ".entry-header{ 
		background: 
			linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%),
			url({$image}) no-repeat center bottom;
		height: 100vh;
		background-size: cover, cover;
	}";
	wp_add_inline_style('inhabitent-theme-style', $hero_css );



}

add_action( 'wp_enqueue_scripts', 'inhabitent_dynamic_css');


/**
 * Customize excerpt length and style.
 *
 * @param  string The raw post content.
 * @return string
 */
function inhabitent_wp_trim_excerpt( $text ) {
    $raw_excerpt = $text;

    if ( '' == $text ) {
        // retrieve the post content
        $text = get_the_content('');

        // delete all shortcode tags from the content
        $text = strip_shortcodes( $text );

        $text = apply_filters( 'the_content', $text );
        $text = str_replace( ']]>', ']]&gt;', $text );

        // indicate allowable tags
        $allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
        $text = strip_tags( $text, $allowed_tags );

        // change to desired word count
        $excerpt_word_count = 50;
        $excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );

        // create a custom "more" link
        $excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="read-more black-btn">Read more &rarr;</a></p>'; // modify excerpt ending
        $excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );

        // add the elipsis and link to the end if the word count is longer than the excerpt
        $words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );

        if ( count( $words ) > $excerpt_length ) {
            array_pop( $words );
            $text = implode( ' ', $words );
            $text = $text . $excerpt_more;
        } else {
            $text = implode( ' ', $words );
        }
    }
    return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}

remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', 'inhabitent_wp_trim_excerpt' );


/**
 * login_head (action)
 * login_headerurl (filter)
 * login_headertitle (filter)
 */

 //changes logo and login styling
add_action('login_head', 'inhabitent_login_logo');
function inhabitent_login_logo(){
	echo '<style> 
		#login h1 a{
			background: url(' . get_template_directory_uri() . '/assets/images/inhabitent-logo-text-dark.svg) no-repeat !important;
			background-size: 300px 53px !important;
			width: 300px !important;
			height: 53px !important;
		}
		#login .button.button-primary{
			background: #248A83;
		}
		#login .button.button-primary:hover{
			background: #00655e;
		}
		#user_login:focus{
			outline: none !important;
    		border:1px solid #248A83;
    		box-shadow: 0 0 10px #719ECE;
		}
		#user_pass:focus{
			outline: none !important;
    		border:1px solid #248A83;
    		box-shadow: 0 0 10px #719ECE;
		}

	</style>';
}

add_filter('login_headerurl', 'inhabitent_login_url');
function inhabitent_login_url($url){
	return home_url();
}

add_filter('login_headertitle', 'inhabitent_login_title');
function inhabitent_login_title(){
	return 'inhabitent';
}

add_filter('get_the_archive_title', 'inhabitent_archive_title');

function inhabitent_archive_title($title){
	if(is_post_type_archive( 'product' )){
		$title = 'Shop Stuff';
	}elseif(is_tax('product_type')){
		$title = single_term_title('', 'false' );
	}
	return $title;
}

add_action('pre_get_posts', 'inhabitent_modify_queries');

function inhabitent_modify_queries($query){
	if(is_post_type_archive( array('product'))
	 || $query->is_tax('product_type')
	 && !is_admin()
	 && $query->is_main_query())
	 {
		$query->set('orderby', 'title');
		$query->set('order', 'ASC');
		$query->set('posts_per_page', 16);
	}
}