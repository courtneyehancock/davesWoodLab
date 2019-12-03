<?php /*Template Name: Home Page Template*/ ?>
<?php get_header(); ?>

<div class="container-fluid">
  <div class="row video-hero">
    <div class="col-md-12">
      <!--Banner Img Widget-->
      <?php dynamic_sidebar('banner-home'); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <!--Short Section w/Icons-->
      <?php dynamic_sidebar('service-brief-home'); ?>
    </div>
  </div>
</div>

<div class="mt-5">
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
