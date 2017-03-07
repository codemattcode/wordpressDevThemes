<!-- THIS IS THE GENERIC PAGE FILE AND APPLIES TO ALL NEWLY CREATED PAGES (IN THE WORDPRESS DASHBOARD) IF NO UNIQUE PAGE FILES ARE PROVIDED. -->


<!-- Header including Meta Info -->
<?php  
  
get_header();
// Loop and display content
  if (have_posts()) :
    while (have_posts()) : the_post(); 
// Page Content
  the_content();
?>

    
<div class="theme-tips"><p>This is a generic page (page.php)</p></div>


<!-- Error if page not found -->
<?php   
  endwhile;

  else : 
    echo '<p>Oops! 404 : Page Not Found</p>';

  endif; 
?>


<!--  Footer content -->
<?php get_footer(); ?>



