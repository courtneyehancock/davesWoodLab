<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-5 p-4 m-2">
<?php
  if(have_posts()){
    while(have_posts()){
      the_post(); ?>
      <div class="post-feature">
        <?php the_post_thumbnail(); ?>
      </div>
    </div>
    <div class="col-lg-5 p-4 m-2">
      <h2 class="post-title"><?php the_title(); ?></h2>
      <?php the_content(); ?>


    </div>
  </div>
      <?php
    }
  }
?>
</div>

<?php get_footer(); ?>
