<?php
  add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

  function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style';
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', /*linker vores stylesheet style.css*/
      array(),
      $theme -> parent()-> get('Version') /*Information fra style.css bliver importeret */
    );

    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
      array( $parenthandle ),
        $theme->get('Version')
    );
  }

/*Google fonts */

  function wpb_add_google_fonts() {

    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Catamaran:wght@600&family=Signika:wght@300&display=swap', false ); 
    }
    
    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

 ?>


