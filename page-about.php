<?php /*Template Name: About Page Template*/ ?>
<?php get_header(); ?>

<div class="container-fluid about-page">
  <div class="row">
    <div class="col-md-12">
      <!--Text-->
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>
            <?php the_content();
          }
        }
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
