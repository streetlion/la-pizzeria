<?php

function lapizzeria_styles() {

     //Registrar los estilos
       wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0' );
       wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array('normalize'), '4.7.0' );
       wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0' );

     //Llamar los estilos
       wp_enqueue_style('normalize');
       wp_enqueue_style('fontawesome');
       wp_enqueue_style('style');
}

add_action ( 'wp_enqueue_scripts', 'lapizzeria_styles' );


// Creación de menús
function lapizzeria_menus(){
     register_nav_menus(array(
      'header-menu' => __('Header Menu', 'lapizzeria'),
      'social-menu' => __('Social Menu', 'lapizzeria'),
    ));
}

add_action('init', 'lapizzeria_menus');

?>
