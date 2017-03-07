<?php 
  
  function custom_wp_resources() {
//  LOCATE STYLESHEET 
    wp_enqueue_style('style-name', get_stylesheet_uri() );
  }

add_action( 'wp_enqueue_scripts', 'custom_wp_resources' );









// Custom Excerpt wordcount length
function custom_excerpt_wordcount() {
  return 75;
}
add_filter('excerpt_length', 'custom_excerpt_wordcount');

// Theme setup
function blankTheme_setup() {











// Navigation Menus
// Configure in Wordpress dashboard > Appearance > Menus
register_nav_menus(array(
  'social-nav' => __( 'Social Navigation' ),
  'header-nav' => __( 'Header Navigation' ),
  'footer-nav' => __( 'Footer Navigation' )
));

  // Sub Menu Navigation
function get_top_ancestor_id() {

  global $post;

  if($post->post_parent) {
    $ancestors = array_reverse(get_post_ancestors($post->ID));
    return $ancestors[0]; 
  }

  return $post->ID;

}

  // if page menu nav has a subMenu

  function has_subMenu() {
    
    global $post;

    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);
  } 














  // Add featured image support
  add_theme_support('post-thumbnails');
  // width, height, hard-crop
  add_image_size('small-thumbnail', 280, 220, true);
  // width, height, image positioning
  add_image_size('banner-image', 920, 210, array('left', 'top'));
}


  

// initialise theme
add_action('after_setup_theme', 'blankTheme_setup');













