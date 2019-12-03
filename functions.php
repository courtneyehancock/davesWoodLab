<?php
//Adds featured imgs to posts
  add_theme_support('post-thumbnails');


  /*-------------------------------------

  Adds style sheet and JavaScript files

  -----------------------------------------*/

  function custom_theme_scripts() {
  //Bootstrap integration
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

  //main CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());

  //Javascript files
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');

  }

  add_action('wp_enqueue_scripts', 'custom_theme_scripts');


  //Widget Areas
  function blank_widgets_init() {
    //Home: Banner Widget
    register_sidebar(array(
      'name'          => ('Banner Home'),
      'id'            => 'banner-home',
      'description'   => 'Top banner widget area in home page',
      'before_widget' => '<div class="widget-home widget-top">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
    //Home: About-Brief Widget
    register_sidebar(array(
      'name'          => ('About-Brief Home'),
      'id'            => 'about-brief-home',
      'description'   => 'About-Brief widget area in home page',
      'before_widget' => '<div class="widget-home widget-left">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
    //Home: Right Img Widget
    register_sidebar(array(
      'name'          => ('Right Img Home'),
      'id'            => 'right-img-home',
      'description'   => 'Right img widget area in Home Page',
      'before_widget' => '<div class="widget-home widget-right">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
    //Home: Small Banner Widget
    register_sidebar(array(
      'name'          => ('Small Banner Home'),
      'id'            => 'small-banner-home',
      'description'   => 'Small banner widget area in home page',
      'before_widget' => '<div class="widget-home widget-small-banner">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
    //Home: Service-Brief Widget
    register_sidebar(array(
      'name'          => ('Service-Brief Home'),
      'id'            => 'service-brief-home',
      'description'   => 'Service-Brief widget area in home page',
      'before_widget' => '<div class="widget-home widget-service-brief">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
    //Home: Tony Quote Home
    register_sidebar(array(
      'name'          => ('Quote Home'),
      'id'            => 'quote-home',
      'description'   => 'Quote area in home page',
      'before_widget' => '<div class="tony-quote-home">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Home: Brands Slider Widget
    register_sidebar(array(
      'name'          => ('Brands Slider Home'),
      'id'            => 'brands-home',
      'description'   => 'Brands Slider widget area in home page',
      'before_widget' => '<div class="widget-home widget-brands">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
    //Home: Left Img Widget
    register_sidebar(array(
      'name'          => ('Left Img Home'),
      'id'            => 'left-img-home',
      'description'   => 'Left img widget area in Home Page',
      'before_widget' => '<div class="widget-home widget-left">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Home: About-Brief Widget
    register_sidebar(array(
      'name'          => ('Contact-Brief Home'),
      'id'            => 'contact-brief-home',
      'description'   => 'Contact-Brief widget area in home page',
      'before_widget' => '<div class="widget-home widget-right">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Home: Img Slider Widget
    register_sidebar(array(
      'name'          => ('Img Slider Home'),
      'id'            => 'img-slider-home',
      'description'   => 'Img slider widget area in Home Page',
      'before_widget' => '<div class="widget-home">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //About: Banner Widget
    register_sidebar(array(
      'name'          => ('Banner About'),
      'id'            => 'banner-about',
      'description'   => 'Top banner widget area in about page',
      'before_widget' => '<div class="widget-about widget-top">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //About: Left-Brief-Info Widget
    register_sidebar(array(
      'name'          => ('About-Left Brief Info'),
      'id'            => 'about-left-brief-info',
      'description'   => 'About Left Brief Info widget area in home page',
      'before_widget' => '<div class="widget-about widget-left">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //About: Right-Brief-Info Widget
    register_sidebar(array(
      'name'          => ('About-Right Brief Info'),
      'id'            => 'about-right-brief-info',
      'description'   => 'About Right Brief Info widget area in home page',
      'before_widget' => '<div class="widget-about widget-right">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //About: Bottom-Left-Brief-Info Widget
    register_sidebar(array(
      'name'          => ('About-Bottom Left Brief Info'),
      'id'            => 'about-bottom-left-brief-info',
      'description'   => 'About Bottom Left Brief Info widget area in home page',
      'before_widget' => '<div class="widget-about widget-left">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Services: Banner Widget
    register_sidebar(array(
      'name'          => ('Banner Services'),
      'id'            => 'banner-services',
      'description'   => 'Top banner widget area in services page',
      'before_widget' => '<div class="widget-services widget-top">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Services: Middle Left Img Widget
    register_sidebar(array(
      'name'          => ('Middle Left Img Widget Services'),
      'id'            => 'middle-left-img-widget-services',
      'description'   => 'Middle left image widget area in services page',
      'before_widget' => '<div class="widget-services">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Services: Middle Right Text Widget
    register_sidebar(array(
      'name'          => ('Middle Right Text Widget Services'),
      'id'            => 'middle-right-text-widget-services',
      'description'   => 'Middle right text widget area in services page',
      'before_widget' => '<div class="widget-services">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Services: Big Text Widget
    register_sidebar(array(
      'name'          => ('Big-Text Services'),
      'id'            => 'bigtext-services',
      'description'   => 'Big-Text widget area in services page',
      'before_widget' => '<div class="widget-services widget-bigtext">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Services: Small Banner Widget - display on all internal service pages
    register_sidebar(array(
      'name'          => ('Small Banner Services'),
      'id'            => 'small-banner-services',
      'description'   => 'Small banner widget area in services page',
      'before_widget' => '<div class="widget-services widget-small-banner">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Gallery: Banner Widget
    register_sidebar(array(
      'name'          => ('Banner Gallery'),
      'id'            => 'banner-gallery',
      'description'   => 'Banner widget area in gallery page',
      'before_widget' => '<div class="widget-gallery widget-banner">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Gallery: Gallery Widget
    register_sidebar(array(
      'name'          => ('Photo Gallery'),
      'id'            => 'photo-gallery',
      'description'   => 'Photo gallery widget area in gallery page',
      'before_widget' => '<div class="widget-gallery widget-banner">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Contact: Banner Widget
    register_sidebar(array(
      'name'          => ('Banner Contact'),
      'id'            => 'banner-contact',
      'description'   => 'Top banner widget area in contact page',
      'before_widget' => '<div class="widget-contact widget-top">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
    //Contact: Business Card Widget
    register_sidebar(array(
      'name'          => ('Business Card Contact'),
      'id'            => 'business-card-contact',
      'description'   => 'Business card widget area in contact Page',
      'before_widget' => '<div class="business-card-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Contact: Form
    register_sidebar(array(
      'name'          => ('Contact Form'),
      'id'            => 'contact-form',
      'description'   => 'Contact form widget area in contact Page',
      'before_widget' => '<div class="contact-form-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  }
  add_action('widgets_init', 'blank_widgets_init');

  //Custom Menus
  function custom_menus(){
    register_nav_menus(array(
      'header-menu' => __('Header Menu'),
      'footer-menu' => __('Footer Menu'),
    ));
  }
  add_action('init', 'custom_menus');

  //Logo in the header
  add_theme_support( 'custom-header', array(
    'flex-width'      => true,
    'width'           => 260,
    'flex-height'     => true,
    'height'          => 100,
    'header-selector' => '.site-title a',
    'header-text'     => false
  ) );

  //Adds featured imgs to posts
    add_theme_support('post-thumbnails');


  ?>
