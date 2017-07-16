<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=width-device , initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" rel="shortcut icon">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="container-fluid">

    <!--Site Header-->

    <header>
      <div class="row top">
        <div class="col-md-12">
          <div class="row top-area">
            <?php dynamic_sidebar('top-bar') ?>
            <?php dynamic_sidebar('top') ?>
          </div>
          <div class="row">
            <?php dynamic_sidebar('header-a1') ?>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
              <?php dynamic_sidebar('header-b1') ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
              <?php dynamic_sidebar('header-b2') ?>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!--End Header-->

    <div class="row">
      <div class="col-md-12">
        <div class="full-wrapper">
