<!-- THIS FILE APPLIES WHEN YOU CREATE A PAGE CALLED 'SERVICES' IN THE WORDPRESS DASHBOARD. USE THIS PATTERN TO CREATE AND BUILD ADDITIONAL UNQIUE PAGES-->

<!-- Header including Meta Info -->
<?php  
  
get_header();
// Loop and display content
  if (have_posts()) :
    while (have_posts()) : the_post(); 
// Page Content
  the_content();
?>

        
  <div class="theme-tips"><p>This is a 'Unique' Page : Services (page-services.php) </p></div>



<!-- Error if page not found -->
<?php   
  endwhile;

  else : 
    echo '<p>Oops! 404 : Page Not Found</p>';

  endif; 
?>


<!--  Footer content -->
<?php get_footer(); ?>



