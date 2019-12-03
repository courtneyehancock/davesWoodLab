<?php /*Template Name: Contact Page Template*/ ?>
<?php get_header(); ?>


<div class="container-fluid services-page">
  <div class="row">
    <div class="col-md-12">
      <!--Banner Img Widget-->
      <?php dynamic_sidebar('banner-contact'); ?>
    </div>
  </div>

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

  <div class="row">
    <div class="col-md-12 text-center">
      <!--Contact Form Widget-->
      <?php dynamic_sidebar('contact-form'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
