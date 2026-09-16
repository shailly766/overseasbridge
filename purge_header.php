<?php
header("X-LiteSpeed-Purge: *");
header("X-LiteSpeed-Purge: /contact/");
header("X-LiteSpeed-Purge: /contact-us/");

require_once('wp-load.php');

if (class_exists('LiteSpeed\Purge')) {
    \LiteSpeed\Purge::purge_all();
}
if (function_exists('litespeed_purge_all')) {
    litespeed_purge_all();
}
do_action('litespeed_purge_all');

$p = get_page_by_path('contact');
if ($p) wp_update_post(['ID' => $p->ID]);

echo 'PURGE_SUCCESS';
unlink(__FILE__);
