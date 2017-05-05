<?php
/*
Template Name: Hero Left Sidebar A
*/
?>

<!--Header-->

<?php get_header (); ?>

<!--End Header-->

<!--Content-->
<div class="row">
  <div class="page-hero" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
  </div>
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
          <div class="col-xs-12 col-md-8 col-md-push-4">
            <?php if ( have_posts() ) : while( have_posts() ) : the_post();
                 the_content();
            endwhile; endif; ?>
          </div>
          <div class="col-xs-12 col-md-4 col-md-pull-8">
            <?php dynamic_sidebar('sidebar-a') ?>
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
