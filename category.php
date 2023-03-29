<?php
if ( ! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); 

require get_parent_theme_file_path( '/global-templates/category/category.php' );

get_footer();