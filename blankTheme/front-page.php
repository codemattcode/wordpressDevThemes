<!-- Header including Meta Info -->
<?php  
  
get_header();

// Loop and display content
  if (have_posts()) :
    while (have_posts()) : the_post(); 

// Page content from WP Dashboard 'Post' Text Field
  the_content();
?>

  <div class="theme-tips"><p>This is the front (Static) page (front-page.php)</p></div>



<!-- Error if page not found -->
<?php   
  endwhile;

  else : 
    echo '<p>Oops! 404 : Page Not Found</p>';

  endif; 
?>


<!--  Footer content -->
<?php get_footer(); ?>



