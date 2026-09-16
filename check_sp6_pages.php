<?php
require_once('wp-load.php');

$p = get_page_by_path('business-support-services');
if ($p) {
    $tmpl = get_post_meta($p->ID, '_wp_page_template', true);
    echo "Slug: business-support-services | ID: {$p->ID} | Title: {$p->post_title} | Template: $tmpl\n";
} else {
    echo "Slug: business-support-services NOT FOUND\n";
}
