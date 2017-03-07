<!-- Uncomment to use -->

<!-- Footer Navigation -->
  <!-- <?php 
      $args = array(
        'theme_location' => 'footer-nav'
      );
    ?>
  <?php wp_nav_menu(  $args  ) ?>  -->



<!-- Copyright information -->
<div>
    <?php bloginfo('name'); ?>
  
  &copy; <?php echo date('Y') ?>
</div>


<?php wp_footer(); ?>
</body>
</html>
