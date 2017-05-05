<?php
/*
Template Name: Right Sidebar A
*/
?>

<!--Header-->

<?php get_header (); ?>

<!--End Header-->

<!--Content-->
<div class="row">
  <div class="main-wrapper">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12 title-bar">
          <h1 class="page-title"><?php the_title(); ?></h1>
        </div>
      </div>
      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-8">
            <?php if ( have_posts() ) : while( have_posts() ) : the_post();
                 the_content();
            endwhile; endif; ?>
          </div>
          <div class="col-md-4">
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
