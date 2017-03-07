<?php  
  
get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); 

  the_content();
?>
<div class="wrapper">
<div class="row">
<div class="col-12">
<!-- conditional logic whether to display this custom content -->

    <?php if (get_theme_mod('ct-footer-callout-display') == "Yes") { ?>
    
        <div class="footer-callout clearfix">
          <div class="footer-callout-image">
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('ct-footer-callout-image')) ?>">
          </div>
        
        <div class="footer-callout-text">
          <h2><a href="<?php echo get_permalink(get_theme_mod('ct-footer-callout-link')) ?>">
          <?php echo get_theme_mod('ct-footer-callout-headline') ?>
          </a></h2>
          <?php echo wpautop(get_theme_mod('ct-footer-callout-text')) ?>
        </div>
        </div></?php>

    <?php } ?>

</div>
</div>
</div><!-- /wrapper -->

<?php if (is_active_sidebar('widget1')) : ?>
    <div class="widget">
      <?php dynamic_sidebar('widget1'); ?>
    </div>
<?php endif; ?>


<?php if (is_active_sidebar('widget2')) : ?>
    <div class="widget">
      <?php dynamic_sidebar('widget2'); ?>
    </div>
<?php endif; ?>


    this is some more text hard coded in the php file

<?php   
  endwhile;

  else : 
    echo '<p>Page Not Found. Please try again</p>';

  endif; ?>



<?php 

get_footer();

?>



