<?php
/*
Template Name: Both Sidebars A-B
*/
?>

<!--Header-->

<?php get_header (); ?>

<!--End Header-->

<!--Content-->
<div class="row">
  <div class="breadcrumbs">
    <div class="col-md-12">
      <?php
      if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb('<p id="breadcrumbs">','</p>');
      }
      ?>
    </div>
    <div class="clear"></div>
  </div>
  <div class="main-wrapper">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12 title-bar">
          <h1 class="page-title"><?php the_title(); ?></h1>
        </div>
      </div>
      <div class="content-wrapper">
        <div class="row">
          <div class="col-sm-12 col-md-8 col-md-push-4 col-lg-6 col-lg-push-3">
            <?php if ( have_posts() ) : while( have_posts() ) : the_post();
                 the_content();
            endwhile; endif; ?>
          </div>
          <div class="col-sm-12 col-md-4 col-md-pull-8 col-lg-3 col-lg-pull-6">
            <?php dynamic_sidebar('sidebar-a') ?>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-3">
            <?php dynamic_sidebar('sidebar-b') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Content-->

<!--Footer-->

<?php get_footer(); ?>

<!--End Footer-->
