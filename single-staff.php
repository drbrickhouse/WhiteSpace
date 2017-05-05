<?php
/*
Template Name: Staff
*/
?>

<!--Header-->

<?php get_header (); ?>

<!--End Header-->

<!--Content-->
<div class="main-wrapper">
  <div class="row">
    <div class="col-md-12">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="jumbotron-post">
          <?php
            $size = ('full');
            $attr = ['class' => "img-responsive"];
            the_post_thumbnail($size, $attr);
          ?>
        </div>
        <div class="col-md-12">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <?php endwhile; else : ?>
          <p><?php _e('Oh no! There\'s no content here!') ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<!--End Content-->

<!--Footer-->

<?php get_footer(); ?>

<!--End Footer-->
