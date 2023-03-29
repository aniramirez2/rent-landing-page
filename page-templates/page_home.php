<?php /* Template Name: Homepage */ 

if ( ! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); 

require get_parent_theme_file_path( 'page-templates/home/home.php');

get_footer();

?>