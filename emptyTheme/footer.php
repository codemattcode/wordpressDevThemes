<?php 
  $args = array(
  'theme_location' => 'footer-nav' ); 
?>

<?php wp_nav_menu(  $args  ) ?> 

<?php bloginfo('name'); ?> - &copy; <?php echo date('Y') ?>

<?php wp_footer(); ?>

</body>
</html>
