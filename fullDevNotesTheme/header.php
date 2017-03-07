<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php  bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>



    <nav class="site-nav">
      <div class="wrapper">
        <?php 

          $args = array(
            'theme_location' => 'header-nav'
          );

        ?>

        <?php wp_nav_menu(  $args  ) ?>
      </div>
    </nav>

<!-- site header -->
  <header class="site-header">
    
      <div class="wrapper">

  <div class="row">
    <div class="col-12">    
    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <h2><?php bloginfo('description') ?></h2>
    </div>
  </div>

    <h3>
    <?php if (is_page('about')) { ?>
    
      is_page function
    
    <?php } ?>
    </h3>


      </div><!-- /wrapper -->
  </header>
<div class="wrapper">
