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

<div class="container mt-5 mb-5">
  <div class="row align-items-center">
    <div class="col-md-6 text-center pl-5">
      <!-- About Brief Text Widget-->
      <?php dynamic_sidebar('about-brief-home'); ?>
    </div>
    <div class="col-md-6">
      <!--Img Widget-->
      <?php dynamic_sidebar('right-img-home'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
