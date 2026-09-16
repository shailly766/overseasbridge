<?php
header('X-LiteSpeed-Purge: *');
header('X-LiteSpeed-Purge: /cost-to-set-up-business-in-india/');

require_once(__DIR__ . '/wp-load.php');

if (function_exists('do_action')) {
    do_action('litespeed_purge_all');
}

 = get_page_by_path('cost-to-set-up-business-in-india', OBJECT, array('post', 'page'));
if () {
    clean_post_cache(->ID);
    wp_update_post(array('ID' => ->ID));
    echo 'PURGED_POST_' . ->ID;
}

echo '_SUCCESS';
unlink(__FILE__);
