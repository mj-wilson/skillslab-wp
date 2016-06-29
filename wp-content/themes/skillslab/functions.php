<?php

add_theme_support( 'post-thumbnails' ); 

require_once 'includes/post-types.php';

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );

function my_excerpt($text, $excerpt){
 if ($excerpt) return $excerpt;
$text = strip_shortcodes( $text );
$text = apply_filters('the_content', $text);
 $text = str_replace(']]>', ']]&gt;', $text);
 $text = strip_tags($text);
 $excerpt_length = apply_filters('excerpt_length', 60);
 $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
 $words = preg_split("/[\n
 ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
 if ( count($words) > $excerpt_length ) {
 array_pop($words);
 $text = implode(' ', $words);
 $text = $text . '...';
 } else {
 $text = implode(' ', $words);
 }
return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}

function get_opengraph_image() {
 $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '', '' );
 if ( has_post_thumbnail($post->ID) ) {
 $ogimage = $src[0];
 } else {
 $ogimage = "http://www.nycskillslab.org/wp-content/themes/skillslab/assets/images/skills-lab-GE-logo.jpg";
 }
 return $ogimage;
}
