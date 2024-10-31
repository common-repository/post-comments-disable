<?php 
/*
Plugin Name: Post Comments Disable
Description: wordpress plugin to post comments disable
Plugin URI:https://wordpress.org/plugins/post-comments-disable
Author: zoynul
Author URI:www.fiverr.com/trust_coder1
Version:1.0
License:GPL2 or later
Text Domain: post-comments-disable
Domain Path: /lang
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Close comments on the front-end
function df_disable_comments_status() {
    return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);

// Hide existing comments
function df_disable_comments_hide_existing_comments($comments) {
    $comments = array();
    return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);