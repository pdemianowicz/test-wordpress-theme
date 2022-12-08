<?php defined( 'ABSPATH' ) || exit;  // Exit if accessed directly. ?> 

<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_bloginfo("description"); ?>" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
    <?php wp_body_open(); ?>  
    
    <?php if(function_exists('lc_custom_header')) lc_custom_header(); else {
      
      
      if (get_theme_mod("enable_topbar") ) : ?>
        <!-- ******************* The Topbar Area ******************* -->
        <div id="wrapper-topbar" class="py-2 <?php echo get_theme_mod('topbar_bg_color_choice','bg-light') ?> <?php echo get_theme_mod('topbar_text_color_choice','text-dark') ?>">
          <div class="container">
            <div class="row">
              <div id="topbar-content" class="col-md-12 text-center small"> <?php echo do_shortcode(get_theme_mod('topbar_content')) ?>	</div>
            </div>
          </div>
        </div>
        <?php endif; ?>
        

        <!-- ******************* The Navbar Area ******************* -->
        <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
          <a class="skip-link visually-hidden-focusable" href="#theme-main"><?php esc_html_e( 'Skip to content', 'picostrap' ); ?></a>

          
          <nav class="navbar navbar-expand-lg" aria-label="Main Navigation" >
            <div class="container">
              <div id="logo-tagline-wrap">
                  <!-- Your site title as branding in the menu -->
                  <?php if ( ! has_custom_logo() ) { ?>
                    
                    <?php if ( is_front_page() && is_home() ) : ?>

                      <div class="navbar-brand mb-0 h3"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></div>

                    <?php else : ?>

                      <a class="navbar-brand mb-0 h3" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

                    <?php endif; ?>


                  <?php } else {
                    the_custom_logo();
                  } ?><!-- end custom logo -->

                
                  <?php if (!get_theme_mod('header_disable_tagline')): ?>
                    <small id="top-description" class="text-muted d-none d-md-block mt-n2">
                      <?php bloginfo("description") ?>
                    </small>
                  <?php endif ?>
              
              
                  </div> <!-- /logo-tagline-wrap -->



              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <?php 
                  wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
                
                <ul class="socials-nav">
                  <li><a href="#"><i class="bi bi-facebook"></i><span class="visually-hidden-focusable">Facebook link</span></a></li>
                  <li><a href="#"><i class="bi bi-rocket-takeoff-fill"></i><span class="visually-hidden-focusable">Kosmos link</span></a></li>
                  <li><a href="#"><i class="bi bi-twitter"></i><span class="visually-hidden-focusable">Twitter link</span></a></li>
                  <li><a href="#"><i class="bi bi-suit-heart-fill"></i><span class="visually-hidden-focusable">Example link</span></a></li>
                </ul>

                
                <?php if (get_theme_mod('enable_search_form')): ?>
                  <form action="<?php echo bloginfo('url') ?>" method="get" id="header-search-form">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="s" value="<?php the_search_query(); ?>">
                  </form> 
                <?php endif ?>

              </div> <!-- .collapse -->

           
          

            </div> <!-- .container -->
          </nav> <!-- .site-navigation -->
          <?php

          //AS A TEST / DEMO for a mock-up megamenu
          //include("nav-static-mega.php");
          ?>
        </div><!-- #wrapper-navbar end -->

      
    <?php 
    } // END ELSE CASE 
    ?>

<main id='theme-main'>