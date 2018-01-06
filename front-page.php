<?php
/*
Template Name: Home
*/
?>

<!--Header-->

<?php
$header_choice = get_field('header');
if ($header_choice == 'default') {
  get_header();
} else {
  get_header($header_choice);
}
?>

<!--End Header-->





<!--Content-->
<?php dynamic_sidebar('home-1') ?>
<?php dynamic_sidebar('home-2') ?>
<?php dynamic_sidebar('home-3') ?>
<?php dynamic_sidebar('home-4') ?>

<!--End Content-->





<!--Footer-->

<?php
$footer_choice = get_field('footer');
if ($header_footer == 'default') {
  get_footer();
} else {
  get_footer($footer_choice);
}
?>

<!--End Footer-->
