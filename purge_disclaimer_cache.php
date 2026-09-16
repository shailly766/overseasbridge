<?php
require_once('wp-load.php');
if (function_exists('do_action')) {
    do_action('litespeed_purge_all');
}
if (class_exists('LiteSpeed\Purge')) {
    \LiteSpeed\Purge::purge_all();
}
header('Content-Type: text/plain');
echo 'LSCache Purged successfully!';
?>