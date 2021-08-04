<?php
// Change all instances of megumiportfolio to your theme name.
if ( ! function_exists( 'megumiportfolio_setup' ) ) :
  
   function megumiportfolio_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );

     register_nav_menus( array(
      'menu-main' => 'Main Menu',
      'menu-category' => 'Category Menu',
      'menu-social' => 'Social Menu',
      ) );
   }
  
endif;
  
add_action('after_setup_theme', 'megumiportfolio_setup');



function themename_custom_logo_setup() {
   $defaults = array(
       'height'               => 400,
       'width'                => 400,
       'flex-height'          => true,
       'flex-width'           => true,
       'header-text'          => array( 'site-title', 'site-description' ),
       'unlink-homepage-logo' => true, 
   );

   add_theme_support( 'custom-logo', $defaults );
}


add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
  


function megumiportfolio_scripts_styles(){
   wp_enqueue_style('megumiportfolio_style', get_stylesheet_uri());
   wp_enqueue_style('megumiportfolio_style_googlefonts', 'https://fonts.googleapis.com/css2?family=Kalam&display=swap', array(), null);
   wp_enqueue_style('megumiportfolio_style_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');

   wp_enqueue_script('megumiportfolio_script_navigation_js', get_template_directory_uri() . '/js/navigation.js', array(), null, true);
}
  
add_action('wp_enqueue_scripts', 'megumiportfolio_scripts_styles');



// Enable Header Setup in dashboard 
add_theme_support( 'custom-header' );


// Add page title to body class
function add_class_page_slug($classes) {
   if( is_page() ) {
       $page = get_post( get_the_ID() );
       $classes[] = 'page-'. $page->post_name;
   }
   return $classes;
}
add_filter('body_class', 'add_class_page_slug');

