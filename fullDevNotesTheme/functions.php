<?php 
  
  function custom_wp_resources() {
// ************************** LOCATE STYLESHEET **********************
    wp_enqueue_style('style-name', get_stylesheet_uri() );
  }

add_action( 'wp_enqueue_scripts', 'custom_wp_resources' );









// Custom Excerpt wordcount length
function custom_excerpt_wordcount() {
  return 75;
}
add_filter('excerpt_length', 'custom_excerpt_wordcount');

// Theme setup
function customTheme_setup() {












// ************************** ADD NAVIGATION MENUS *********************
  // Navigation Menus
register_nav_menus(array(
  'header-nav' => __( 'Header Navigation'),
  'footer-nav' => __( 'Footer Navigation'),
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













// ************************** ADD FEATURED IMAGE **********************
  // Add featured image support
  add_theme_support('post-thumbnails');
  // width, height, hard-crop
  add_image_size('small-thumbnail', 280, 220, true);
  // width, height, image positioning
  add_image_size('banner-image', 920, 210, array('left', 'top'));
}






  // Add post format support
  // add_theme_support('post-formats', array('aside', 'gallery', 'link'));


// initialise theme
add_action('after_setup_theme', 'customTheme_setup');
















// ************************** CUSTOM WIDGETS **********************
// Add widget locations
function customWidgetsInit() {
  register_sidebar( array(
      'name' => 'My First Widget',
      'id' => 'widget1',
      'before_widget' => '<div class="widget-item">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-h4-style">',
      'after_title' => '</h4>'
    ));
}

add_action('widgets_init', 'customWidgetsInit');

// Add widget locations
function customWidgetsInit2() {
  register_sidebar( array(
      'name' => 'My Second Widget',
      'id' => 'widget2',
      'before_widget' => '<div class="widget-item">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-h4-style">',
      'after_title' => '</h4>'
    ));
}

add_action('widgets_init', 'customWidgetsInit2');














// ************************** CUSTOM CONTENT MODULES *******************

// Add footer callout section to admin appearance customise screen

function ct_footer_callout($wp_customize) {
  $wp_customize->add_section('ct-footer-callout-section', array(
    'title' => 'Footer Callout'
  ));


// begin 'Setting and Control' pairs
  $wp_customize->add_setting('ct-footer-callout-display', array(
    'default' => 'No'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ct-footer-callout-display-control', array(
    'label' => 'Display this section?',
    'section' => 'ct-footer-callout-section',
    'settings' => 'ct-footer-callout-display',
    'type' => 'select',
    'choices' => array('No' => 'No', 'Yes' => 'Yes')
  )));




  $wp_customize->add_setting('ct-footer-callout-headline', array(
    'default' => 'Example Headline Text!'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ct-footer-callout-headline-control', array(
    'label' => 'Headline',
    'section' => 'ct-footer-callout-section',
    'settings' => 'ct-footer-callout-headline'
  )));



  $wp_customize->add_setting('ct-footer-callout-text', array(
    'default' => 'Example text Text!'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ct-footer-callout-text-control', array(
    'label' => 'Text',
    'section' => 'ct-footer-callout-section',
    'settings' => 'ct-footer-callout-text',
    'type' => 'textarea'
  )));



  $wp_customize->add_setting('ct-footer-callout-link');

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ct-footer-callout-link-control', array(
    'label' => 'Link',
    'section' => 'ct-footer-callout-section',
    'settings' => 'ct-footer-callout-link',
    'type' => 'dropdown-pages'
  )));



  $wp_customize->add_setting('ct-footer-callout-image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ct-footer-callout-image-control', array(
    'label' => 'Image',
    'section' => 'ct-footer-callout-section',
    'settings' => 'ct-footer-callout-image',
    'width' => 150,
    'height' => 100
  )));
}

add_action('customize_register', 'ct_footer_callout');
