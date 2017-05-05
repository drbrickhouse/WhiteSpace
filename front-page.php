<?php
/*
Template Name: Home
*/
?>

<!--Header-->

<?php
get_header ();
?>

<!--End Header-->





<!--Content-->

<?php dynamic_sidebar('home-1') ?>
<?php dynamic_sidebar('home-2') ?>
<?php dynamic_sidebar('home-3') ?>
<?php dynamic_sidebar('home-4') ?>

<!--End Content-->





<!--Footer-->

<?php get_footer(); ?>

<!--End Footer-->
