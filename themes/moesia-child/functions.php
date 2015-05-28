<?php
/**
 * Enqueues child theme stylesheet, loading first the parent theme stylesheet.
 */
function parent_theme_style() {
	wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'parent_theme_style' );


function test_scripts() {

	wp_register_script('yolo_script', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), true);
	wp_enqueue_script('yolo_script');

}

add_action( 'wp_enqueue_scripts', 'test_scripts' );

if ( ! function_exists( 'moesia_nav_bar' ) ) {
function moesia_nav_bar() {
	echo '<div class="top-bar">
			<div class="container">
				<div class="site-branding col-sm-4" id="site-branding-custom">';
				if ( get_theme_mod('site_logo') ) :
					echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="';
						bloginfo('name');
					echo '"><img class="site-logo" src="' . esc_url(get_theme_mod('site_logo')) . '" alt="';
						bloginfo('name');
					echo '" /></a>';
				else :
					echo '<h1 class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
						bloginfo( 'name' );
					echo '</a></h1>';
					echo '<h2 class="site-description">';
						bloginfo( 'description' );
					echo '</h2>';
				endif;
			echo '</div>';
			// echo '<button class="menu-toggle"><i class="fa fa-bars"></i></button>
			echo '<div id="nav-icon1" class="menu-toggle">
					  <span></span>
					  <span></span>
					  <span></span>
					</div>
				<nav id="site-navigation" class="main-navigation col-sm-8" role="navigation">';
				wp_nav_menu( array( 'theme_location' => 'primary' ) );
			echo '</nav>';
			
			if ( get_theme_mod('toggle_search', 0) ) :
				echo '<span class="nav-search"><i class="fa fa-search"></i></span>';
				echo '<span class="nav-deco"></span>';
				echo '<div class="nav-search-box">';
					get_search_form();
				echo '</div>';
			endif;
		echo '</div>';
	echo '</div>';
}
}
if (get_theme_mod('moesia_menu_top', 0) == 0) {
	add_action('tha_header_after', 'moesia_nav_bar');
} else {
	add_action('tha_header_before', 'moesia_nav_bar');
}


function widgets_pains() {
	register_widget('some_widget');
	register_widget('fortune_testimonial');
	register_widget('fortune_latest_news');
}

add_action('widgets_init', 'widgets_pains');


require get_stylesheet_directory() . "/widgets/fp-services.php";
require get_stylesheet_directory() . "/widgets/fp-testimonials.php";
require get_stylesheet_directory() . "/widgets/fp-latest-news.php";