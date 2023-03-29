<?php
if ( ! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); 

require get_parent_theme_file_path( '/global-templates/search/search.php' );

get_footer();