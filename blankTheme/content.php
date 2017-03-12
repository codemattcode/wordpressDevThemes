<!-- BLOG PAGE INDEX / POSTS LIST TEMPLATE -->

<article>

<div>
<!-- add post title link / title -->
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>
<div>
<!-- add feature image thumbnail -->
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
     
</div>
<div style="margin-top: 300px;">    
<!-- add post excerpt/content -->
    <?php echo get_the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>">Read More &raquo;</a>
</div>    
    

</article>
