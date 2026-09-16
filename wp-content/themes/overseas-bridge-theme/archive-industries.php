<?php
/**
 * Post Type Archive Template: Industries
 *
 * @package Overseas_Bridge
 */

$ind_template = get_template_directory() . '/page-templates/template-industries.php';
if ( file_exists( $ind_template ) ) {
    include $ind_template;
    exit;
}

get_header();
?>
<?php get_footer(); ?>
