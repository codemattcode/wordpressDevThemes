<?php  
  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>

<?php
  the_content();
?>

<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found. Please try again</p>';

  endif; ?>
<?php 

get_footer();

?>




