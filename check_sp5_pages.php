<?php
require_once('wp-load.php');

$slugs = ['marketing-for-businesses', 'hiring-payroll-hr'];
foreach ($slugs as $s) {
    $p = get_page_by_path($s);
    if ($p) {
        $tmpl = get_post_meta($p->ID, '_wp_page_template', true);
        echo "Slug: $s | ID: {$p->ID} | Title: {$p->post_title} | Template: $tmpl\n";
    } else {
        echo "Slug: $s NOT FOUND\n";
    }
}
