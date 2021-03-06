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

function inhabitent_body_classes( $classes ) {

	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );

//changes logo and adds background in login page
	function my_login_logo() { ?>
		<style type="text/css">
				#login h1 a, .login h1 a {
					background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo/inhabitent-logo-text-dark.svg);
					height:65px;
					width:320px;
					background-size: 320px 65px;
					background-repeat: no-repeat;
					padding-bottom: 30px;
				}

				.login{
					background: linear-gradient(217deg, rgba(255,255,255,.5), rgba(255,255,255, 0.5)), url(<?php echo get_stylesheet_directory_uri(); ?>/images/home-hero.jpg);
					background-size: cover;
					background-repeat: no-repeat;
				}
		</style>
	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_logo' );

//Change URL for logo in login page
	add_filter( 'login_headerurl', 'inhabitent_logo_url' );
	function inhabitent_logo_url($url) {
			return get_home_url();
	}

	function inhabitent_login_title(){
		return 'Inhabitent';
	}
	add_filter('login_headertitle', 'inhabitent_login_title');

//Changes header in about.php
	function about_page_hero() {
		if( !is_page_template('page-templates/about.php') ) {
			return;
		}

			$img = CFS () -> get('header-img');
			if(!$img){
				return;
			}
			$custom_css = 
				".page-template-about .entry-header{
										background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)), url({$img});
										background-size: cover;
										background-repeat: no-repeat;
									}";
		wp_add_inline_style( 'inhabitent-style', $custom_css );
		}

	add_action( 'wp_enqueue_scripts', 'about_page_hero' );


//Change posts per page in Shop
	function product_post_per_page( $query ) {

		if ( is_post_type_archive( 'product' ) ) {
				$query->set( 'posts_per_page', 16 );
				$query->set( 'order', 'ASC' );
				$query->set( 'orderby', 'title' );
				return;
		}
	}
	add_action( 'pre_get_posts', 'product_post_per_page', 1 );

