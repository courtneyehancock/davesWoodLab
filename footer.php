<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <!--Logo/text widget-->
        <?php dynamic_sidebar('left-footer'); ?>
      </div>

      <div class="col-md-4">
        <!--Middle Left Space-->
        <?php dynamic_sidebar('middle-left-footer'); ?>
      </div>

      <div class="col-md-4">
        <!--Contact Widget-->
        <?php dynamic_sidebar('right-footer'); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <!--Copyright-->
        <p> © <?php echo date("Y"); ?> Dave's Wood Lab </p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
