<?php get_header(); ?>
<div class="internal-hero-image" style="background-color:#001b3d; background-image: linear-gradient(to bottom, rgba(255, 255, 255, 1), rgba(245, 246, 252, 0.52)), url('https://daveswoodlab.com/wp-content/uploads/2021/10/246240473_244213517759610_7167870577028381681_n.jpg');">
<div class="container internal-div">
<h1 class="hero-text">Project Catalogue - Item</h1>
</div>
</div>
<div class="container pt-5">
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
