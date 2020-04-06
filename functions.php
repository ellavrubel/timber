<?php

add_action( 'wp_enqueue_scripts', 'timber_scripts' );

function timber_scripts() {

//       подключение css файлов

//    wp_enqueue_style( 'timber-magnific-popup', get_template_directory_uri() .'/assets/css/magnific-popup.css', array(), '1.0.0', false );

    wp_enqueue_style( 'timber-style', get_stylesheet_uri() );


//       подключение js файлов

//    wp_deregister_script( 'jquery' );
//    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
//    wp_enqueue_script( 'jquery' );

//    wp_enqueue_script( 'timber-jquery.magnific-popup.min', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(jquery), null, true ); // true - грузится в footer, false - в шапке.

//    wp_enqueue_script( 'timber-main', get_template_directory_uri() . '/assets/js/main',array(), '1.0', true );

}
