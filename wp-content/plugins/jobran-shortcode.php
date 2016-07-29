<?php
/*
  Plugin Name: jobran Post-listing shortcode
  Plugin URI: streamerz.net
  Description: This plugin provides a shortcode to list posts, with parameters. It also registers a couple of post types and tacxonomies to work with.
  Version: 1.0
  Author: Rachel McCollin
  Author URI: http://rachelmccollin.co.uk
  License: GPLv2
 */
add_action('admin_menu','parent_page_models_produits' );
function parent_page_models_produits() { remove_meta_box('pageparentdiv', 'projet', 'normal');}

add_action('add_meta_boxes', 'parent_page_models_boxes_produits');
function parent_page_models_boxes_produits() {
add_meta_box('chapter-parent', 'Parent', 'chapter_attributes_models_meta_box_produits', 'projet', 'side', 'high');
}

function chapter_attributes_models_meta_box_produits($post) {
$post_type_object = get_post_type_object($post->post_type);
if ( $post_type_object->hierarchical ) {
    $pages = wp_dropdown_pages(array('post_type' => 'projet', 'selected' => $post->post_parent, 'name' => 'parent_id', 'show_option_none' => __('(no parent)'), 'sort_column'=> 'menu_order, post_title', 'echo' => 0));
    if ( ! empty($pages) ) {
    echo $pages;
    }
}
}
?>