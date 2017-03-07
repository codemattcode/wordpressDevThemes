

<?php  
  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>

<!-- 
  <article class="post page">
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
  </article>
 -->

<div class="row">
  <div class="col-12"><h1>'Unique Page'</h1></div>
</div>

<div class="row">
  <div class="col-6">
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
  </div>
 
  <div class="col-6 test">
  
    <?php if (is_active_sidebar('widget1')) : ?>
    <div class="widget">
      <?php dynamic_sidebar('widget1'); ?>
    </div>
    <?php endif; ?>
    
  </div>
</div>



<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found</p>';

  endif;


get_footer();

?>


