<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php  bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- social navigation -->

      <?php 
    
          $args = array(
            'theme_location' => 'social-nav'
          );
        ?>
        <?php wp_nav_menu(  $args  ) ?>

<!-- /social navigation -->

  
<!-- home link? -->
  <a href="<?php echo home_url(); ?>">
  <?php bloginfo('name'); ?></a>
<!-- /home link? -->  


<!-- main navigation menu -->
  <?php bloginfo('description') ?>
  
        <?php 
    
          $args = array(
            'theme_location' => 'header-nav'
          );
        ?>
  <?php wp_nav_menu(  $args  ) ?>
<!-- /main navigation menu -->
  
