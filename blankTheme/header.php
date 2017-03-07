<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php  bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">

  <title><?php bloginfo('name'); ?></title>
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<a href="<?php echo home_url(); ?>">
  <?php bloginfo('name'); ?></a>

<!-- Header Navigation -->
 <?php 

    $args = array(
      'theme_location' => 'header-nav'
    );

  ?>

<?php wp_nav_menu(  $args  ) ?>



<!-- Uncomment to use -->

<!-- Social Navigation Menu -->

<!-- <?php 
    $args = array(
      'theme_location' => 'social-nav'
    );
?> -->





  
