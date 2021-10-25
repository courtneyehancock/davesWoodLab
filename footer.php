<footer>
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-md-6">
        <!--Logo/text widget-->
        <?php dynamic_sidebar('left-footer'); ?>
      </div>

      <div class="col-md-6">
        <!--Contact Widget-->
        <?php dynamic_sidebar('right-footer'); ?>
      </div>
    </div>
  </div>
  <div class="bottom-footer mt-3 p-1">
        <!--Copyright-->
        <p class="text-center"> © <?php echo date("Y"); ?> Dave's Wood Lab </p>
</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
