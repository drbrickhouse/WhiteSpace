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
      <div class="row">
        <nav role="navigation" class="navbar navbar-static-top navbar-default">
          <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
      	     <span class="sr-only">Toggle Navigation</span>
        		 <span class="icon-bar"></span>
        		 <span class="icon-bar"></span>
      			 <span class="icon-bar"></span>
          	</button>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="navbar-brand"><img id="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/site-logo.png" alt="" class="img-responsive"/></a>
    			</div>
    			<div id="navbarCollapse" class="collapse navbar-collapse">
            <?php
              $defaults = ( array(
                'theme_location' => 'primary-menu',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'nav navbar-nav navbar-right no-bullet',
                'fallback_cb' => 'wp_page_menu',
                //Process nav menu using our custom nav walker
                'walker' => new wp_bootstrap_navwalker())
              );

              wp_nav_menu( $defaults );
            ?>
          </div>
		    </nav>
      </div>
    </header>

    <!--End Header-->

    <div class="row">
      <div class="col-md-12">
        <div class="full-wrapper">
