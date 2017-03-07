<footer class="site-footer">



    <nav class="site-nav nav-footer">
      
      <?php 

          $args = array(
            'theme_location' => 'footer-nav'
          );

        ?>

      <?php wp_nav_menu(  $args  ) ?>
        
    </nav>
    
    <div class="copyright">

      <p>
        <?php bloginfo('name'); ?>
      
      - &copy; <?php echo date('Y') ?>
      </p>

    </div>

</footer>

</div><!-- /wrapper -->

<?php wp_footer(); ?>
</body>
</html>
