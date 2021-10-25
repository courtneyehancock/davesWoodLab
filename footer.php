<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <!--Logo/text widget-->
        <?php dynamic_sidebar('left-footer'); ?>
      </div>

      <div class="col-md-8">
        <!--Contact Widget-->
        <?php dynamic_sidebar('right-footer'); ?>
      </div>
    </div>
  </div>
  <div class="bottom-footer">
        <!--Copyright-->
        <p class="text-center"> © <?php echo date("Y"); ?> Dave's Wood Lab </p>
</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
