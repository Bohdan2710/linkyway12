<?php

//подключение стилей
add_action( 'wp_enqueue_scripts', 'linky_way_scripts' );
//виджет для футера
add_action( 'widgets_init', 'register_widget_areas' );
//подключаю скриты в отдельной странице "hero page, services crowd"
function custom_script_for_specific_page() {
  $hero_page = get_page_by_title('Main');
  $services_crowd_page = get_page_by_title('Crowd Marketing');
  $services_marketing = get_page_by_title('Online Reputation Management Services');

  if ($hero_page) {
      wp_enqueue_script('script-hero', get_template_directory_uri() . '/assets/dist/js/packages.js', array('jquery'), time(), true);
  }
  if ($services_crowd_page) {
    wp_enqueue_script('script-services-crowd', get_template_directory_uri() . '/assets/dist/js/packages.js', array('jquery'), time(), true);
  }
  if ($services_marketing) {
    wp_enqueue_script('script-services-marketing', get_template_directory_uri() . '/assets/dist/js/packages-serivces-marketing.js', array('jquery'), time(), true);
  }
}
add_action('wp_enqueue_scripts', 'custom_script_for_specific_page');
//постоянное изменение версии
function linky_way_scripts() {
  //style.css add them
	wp_enqueue_style( 'main', get_stylesheet_uri() );

  //bootstrap css
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array('main'), null);

  // swiper css
	wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array('main'), null);

  //style.css
	wp_enqueue_style( 'linky-way', get_template_directory_uri() . '/assets/dist/css/style.css', array(), time());

  //переподключаем JQuery
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', get_template_directory_uri() . '/assets/dist/js/jquery.min.js');
  wp_enqueue_script( 'jquery' );

  // bootstrap js
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true );
  // swiper js
	wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), null, true );
  // app.js
	wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/dist/js/app.js', array('jquery'), time(), true );
}

function register_widget_areas() {
  register_sidebar( array(
    'name'          => 'Footer area one',
    'id'            => 'footer_area_one',
    'description'   => 'This widget area discription',
    'before_widget' => '<section class="footer-area footer-area-one">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
}

//кастом логотип
add_theme_support('custom-logo');

// CPT TAXONOMY

include( 'configure/cpt-taxonomy.php' );

// Utilities

include( 'configure/utilities.php' );

// CONFIG

include( 'configure/configure.php' );

// SHORTCODES

include( 'configure/shortcodes.php' );

// ACF

include( 'configure/acf.php' );

// HOOKS ADMIN

if(is_admin()) {
	include( 'configure/admin.php' );
}


function linky_way_menus() {
  // собираем несколько зон (областей) меню
  $locations = array(
    'header' => __( 'Header Menu', 'linky_way'),
    'footer' => __( 'Footer Menu', 'linky_way' ),
  );
    // регистрируем обралисти меню, которые лежат в переменной $locations
    register_nav_menus( $locations );
}
// хук-событие
add_action( 'init', 'linky_way_menus' );