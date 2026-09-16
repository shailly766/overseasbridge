<?php
header('X-LiteSpeed-Purge: *');
header('Cache-Control: no-cache, no-store, must-revalidate');
require_once('wp-load.php');

if (class_exists('\\LiteSpeed\\Purge')) {
    \LiteSpeed\Purge::purge_all();
    \LiteSpeed\Purge::purge_url(home_url('/'));
    \LiteSpeed\Purge::purge_url('https://overseasbridge.in/');
    echo "LSC_PURGE_ALL_DONE ";
}

if (function_exists('litespeed_purge_all')) {
    litespeed_purge_all();
    echo "LSC_PURGE_FUNC_DONE ";
}

clean_post_cache(16);
if (class_exists('\\LiteSpeed\\Purge')) {
    \LiteSpeed\Purge::purge_url(get_permalink(16));
}
do_action('litespeed_purge_post', 16);

$pages = get_posts(['post_type' => 'page', 'numberposts' => -1]);
foreach ($pages as $p) {
    clean_post_cache($p->ID);
    if (class_exists('\\LiteSpeed\\Purge')) {
        \LiteSpeed\Purge::purge_url(get_permalink($p->ID));
    }
    do_action('litespeed_purge_post', $p->ID);
}
wp_cache_flush();
echo "ALL_PAGES_PURGED ";
unlink(__FILE__);
