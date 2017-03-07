<?php  

/*
Template Name: Special Template
*/ 

  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>


  <!-- <article class="post page">
       </article> -->
<h1 class="template-title">Special-template</h1>

<h2><?php the_title(); ?></h2>

<p class="template">This is a special template. It is selected in the WP dashboard under the pages section and from a drop down menu on the right hand side labelled 'template'</p>

<p><?php the_content(); ?></p>


<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found</p>';

  endif;


get_footer();

?>


