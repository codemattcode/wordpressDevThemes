<article class="post">

<div class="row">
    <div class="col-6">
<!-- add post title link / title -->
      <h2><a class="post-title <?php if ( has_post_thumbnail() ) { ?>title-red <?php } ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<!-- add feature image thumbnail -->
    
      <div class="post-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
      </div>
    </div> 

    <div class="col-6">
<!-- add post excerpt/content -->
    <p><?php echo get_the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>">Read More &raquo;</a>
    </p>
    </div>     
  </div><!-- /row  -->
</article>
