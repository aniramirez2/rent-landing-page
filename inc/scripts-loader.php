<?php

function add_scripts()
{
	echo '<style>
			body {
				animation: fadeInAnimation ease 2s;
				animation-iteration-count: 1;
				animation-fill-mode: forwards;
			}
			@keyframes fadeInAnimation {
				0% {
					opacity: 0;
				}
				100% {
					opacity: 1;
				}
			}
		</style>';

	wp_enqueue_style('fonts', get_stylesheet_directory_uri() . '/assets/css/fonts-imports.css', array(), null);
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.js', array(), null, true);

	if ( is_404() ) {
		wp_enqueue_style('404', get_stylesheet_directory_uri() . '/assets/css/404/404.css', array(), null);
	}

	if ( is_category() ) {
		wp_enqueue_style('category', get_stylesheet_directory_uri() . '/assets/css/category/category.css', array(), null);
		wp_enqueue_script('category', get_stylesheet_directory_uri() . '/global-templates/category/category.js', array(), null);
	}

	if ( is_search() ) {
		wp_enqueue_style('search', get_stylesheet_directory_uri() . '/assets/css/search/search.css', array(), null);
		wp_enqueue_script('search', get_stylesheet_directory_uri() . '/global-templates/search/search.js', array(), null);
	}

	if ( is_page_template( 'page-templates/page_home.php' ) ) {
		wp_enqueue_style('home', get_stylesheet_directory_uri() . '/assets/css/home/home.css', array(), null);
		wp_enqueue_script('home', get_stylesheet_directory_uri() . '/page-templates/home/home.js', array(), null);
	}

	if ( is_single() ) {
		wp_enqueue_style('single', get_stylesheet_directory_uri() . '/assets/css/single-post/single.css', array(), null);
		wp_enqueue_script('single', get_stylesheet_directory_uri() . '/global-templates/single-post/single.js', array(), null);
	}

}
add_action('wp_head', 'add_scripts');