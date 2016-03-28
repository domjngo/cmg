<footer id="footer" class="bc-footer">
  <div class="container">
      <?php if ( is_active_sidebar( 'footer-widget-area' ) ) { ?>
        <div class="row">
            <div class="col-md-12">
              <?php dynamic_sidebar( 'footer-widget-area' ); ?>
            </div>
        </div>
      <?php } ?>
    <div class="row bc-info">
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <p><small>Copyright © <?php echo date("Y"); ?> <br>
          Website by <a href="http://creatistic.com.au/" target="_blank">Creatistic</a></small></p>
      </div>
    </div>
  </div>
</footer>
<!-- #foot -->

<?php wp_footer(); ?>

<!-- jQuery --> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js" type="text/javascript"></script> 

<!-- Bootstrap Core JavaScript --> 
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script> 

<!-- BC JavaScript --> 
<script src="<?php echo get_template_directory_uri(); ?>/js/bc.js"></script>
</body>
</html>