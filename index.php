<?php get_header(); ?>
<!---    Header Area    --->
<div id="nav-bar-div" class="container-fluid">
		  <nav class="navbar navbar-expand-lg fixed-top">
		  <div class="blog-title"><?php bloginfo( 'name' ); ?></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-row-reverse" id="navbarResponsive">
<?php wp_nav_menu( array( 
'theme_location' => 'header-menu', 
'menu_class' => 'navbar-nav ml-auto' 
) ); ?>
			</div>
      </div>
    </nav>

    <!-- Header Container -->
    <div class="container-fluid">

      <div class="row">

 <div class="container">
<!---    Main Header Logo and Slider    --->
      <div class="row">
		  <div class="container-fluid col-3" align="center"><?php if ( is_active_sidebar( 'header-logo' ) ) { dynamic_sidebar( 'header-logo' ); } ?></div>
		  <div class="container-fluid col-9"><?php if ( is_active_sidebar( 'main-header' ) ) { dynamic_sidebar( 'main-header' ); } ?></div>
	 </div>
		  </div>
		</div>
<!---    Call Sidebar and Main Content    --->
		<div class="container">
		<div class="row">
        <div class="col-lg-3 justify-content-center align-items-center">

          <?php get_sidebar(); ?>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9 justify-content-center align-items-center">
			
          <div class="row">
                <?php 
 if ( have_posts() ) { 
 while ( have_posts() ) : the_post();
 ?>
 <div class="blog-post x-4">
 <h2 class="blog-post-title"><?php the_title(); ?></h2>
 <?php the_content(); ?>
 </div><!-- /.blog-post -->
 <?php
 endwhile;
 } 
 ?>
			</div>
		<div class="row">
            <div class="col-lg-4 col-md-6 mb-4 justify-content-center align-items-center">
              <div class="card h-100">
                <?php if ( is_active_sidebar( 'content-one-left' ) ) { dynamic_sidebar( 'content-one-left' ); } ?>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 justify-content-center align-items-center">
              <div class="card h-100">
                <?php if ( is_active_sidebar( 'content-one-center' ) ) { dynamic_sidebar( 'content-one-center' ); } ?>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 justify-content-center align-items-center">
              <div class="card h-100">
                <?php if ( is_active_sidebar( 'content-one-right' ) ) { dynamic_sidebar( 'content-one-right' ); } ?>
              </div>
            </div>
		</div>
    <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 justify-content-center align-items-center">
              <div class="card h-100">
                <div class="card h-100">
                <?php if ( is_active_sidebar( 'content-two-left' ) ) { dynamic_sidebar( 'content-two-left' ); } ?>
              </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 justify-content-center align-items-center">
              <div class="card h-100">
                <div class="card h-100">
                <?php if ( is_active_sidebar( 'content-two-center' ) ) { dynamic_sidebar( 'content-two-center' ); } ?>
              </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 justify-content-center align-items-center">
              <div class="card h-100">
                <div class="card h-100">
                <?php if ( is_active_sidebar( 'content-two-right' ) ) { dynamic_sidebar( 'content-two-right' ); } ?>
              </div>
            </div>
		</div>
	</div>
			</div>
			</div>
			</div>
			</div><!-- /sidebar and main -->
<?php get_footer(); ?>
