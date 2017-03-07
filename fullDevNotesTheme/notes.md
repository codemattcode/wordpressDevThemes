#### add custom message to read more expander
``` 
<?php the_content('Read more of this article &raquo;'); ?>
```

#### add this to index.php if you want to manually add an excerpt field, via the Wordpress dashboard
```
<?php if ($post->post_excerpt) { ?>
    <p><?php echo get_the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>">Read More &raquo;</a>
    </p>
<?php } else {

  the_content();

  } ?>
```

#### to add post formats
add the following code to index.php
```
get_template_part('content', get_post_format());  
```
then add the following code to functions.php (then create corresponding file e.g 'content-aside.php')
```
add_theme_support('post-formats', array('aside', 'gallery', 'link', 'chat', 'image', 'quote', 'status', 'video')); 
```
then add the following code to each page that requires it (e.g single.php or search.php or archive.php etc)
```
get_template_part('content', get_post_format());
```

#### add this to index.php if you include a sidebar
```
<?php get_sidebar(); ?>
```
then create a sidebar.php file and add the following code
```
<div class="whatever">
<?php dynamic_sidebar('sidebar1'); ?>
</div>
```

