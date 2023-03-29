<?php
if ( ! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); 

require get_parent_theme_file_path( '/global-templates/404/404.php' );

get_footer();