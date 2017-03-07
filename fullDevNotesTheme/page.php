

<?php  
  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 
?>

  <div class="row">
    <div class="col-12">
    <article class="page">

    <?php 

      if (has_subMenu() OR $post->post_parent > 0 ) { ?>


      <!-- add sub nav elements -->

    <nav class="site-nav">

        <span class="parent-link">

          <a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a>

        </span>

        <ul class="sub-menu-links">
          <?php 
          
            $args = array(
                'child_of' => get_top_ancestor_id(),
                'title_li' => ''
              );
          ?>
          
          <?php wp_list_pages($args); ?>      
        </ul>
    </nav>

    <?php } ?>


    </div><!-- /col-12 -->
    </div><!-- /row -->
    

    <div>
      <h2 class="page-title"><?php the_title(); ?></h2>
    </div>
    
    <div class="page-copy">
    <p><?php the_content(); ?></p>
    </div>
  </article>

  


<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found. Please try again</p>';

  endif;


get_footer();

?>


