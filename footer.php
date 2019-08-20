</div><!-- /.row -->

</div><!-- /.container -->
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-6 mb-4 justify-content-center align-items-center">
              <div class="card h-100">
                <div class="card h-100">
                <?php if ( is_active_sidebar( 'footer-left' ) ) { dynamic_sidebar( 'footer-left' ); } ?>
              </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 justify-content-center align-items-center">
              <div class="card h-100">
                <div class="card h-100">
                <?php if ( is_active_sidebar( 'footer-left-center' ) ) { dynamic_sidebar( 'footer-left-center' ); } ?>
              </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 justify-content-center align-items-center">
              <div class="card h-100">
                <div class="card h-100">
                <?php if ( is_active_sidebar( 'footer-right-center' ) ) { dynamic_sidebar( 'footer-right-center' ); } ?>
              </div>
            </div>
		</div>
		<div class="col-lg-3 col-md-6 mb-4 justify-content-center align-items-center">
              <div class="card h-100">
                <div class="card h-100">
                <?php if ( is_active_sidebar( 'footer-right' ) ) { dynamic_sidebar( 'footer-right' ); } ?>
              </div>
            </div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 justify-content-center align-items-center" align="center">
		
<footer class="blog-footer">
    <p> Copyright &copy; <?php echo date("Y"); echo " "; echo bloginfo('name'); ?> </p>
</footer>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
