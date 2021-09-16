<?php

function foodera_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('foodera-style', get_template_directory_uri()."/style.css", array(), $version, 'all' );
    wp_enqueue_style('foodera-bootstrap', get_template_directory_uri()."/assets/css/bootstrap.min.css", array(), 'all' );
    wp_enqueue_style('foodera-fontawesome', "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), '4.7.0', 'all' );
    wp_enqueue_style('foodera-ilmosys', get_template_directory_uri()."/assets/css/ilmosys-icon.css", array(), 'all' );
    wp_enqueue_style('foodera-swipebox', get_template_directory_uri()."/assets/js/vendor/swipebox/css/swipebox.min.css", array(), 'all' );
    wp_enqueue_style('foodera-slick', get_template_directory_uri()."/assets/js/vendor/slick/slick.css", array(), 'all' );
}

add_action('wp_enqueue_scripts', 'foodera_register_styles');

function foodera_register_scripts(){
    
    wp_enqueue_script('foodera-jqueryscript', get_template_directory_uri()."/assets/js/jquery.js", array(), '1.0');
    wp_enqueue_script('foodera-boostrapscript', get_template_directory_uri()."/assets/js/bootstrap.min.js", array(), '1.0',true);
    wp_enqueue_script('foodera-slickscript', get_template_directory_uri()."/assets/js/vendor/slick/slick.min.js", array(), '1.0', true);
    wp_enqueue_script('foodera-jqueryeasing', get_template_directory_uri()."/assets/js/vendor/jquery.easing.min.js", array(), '1.0', true);
    wp_enqueue_script('foodera-stellarscript', get_template_directory_uri()."/assets/js/vendor/stellar.js", array(), '1.0', true);
    wp_enqueue_script('foodera-isotope', get_template_directory_uri()."/assets/js/vendor/isotope.pkgd.js", array(), '1.0', true);
    wp_enqueue_script('foodera-slickscript', get_template_directory_uri()."/assets/js/vendor/swipebox/js/jquery.swipebox.min.js", array(), '1.0', true);
    wp_enqueue_script('foodera-jscript', get_template_directory_uri()."/assets/js/main.js", array(), '1.0', true);
    wp_enqueue_script('foodera-jqueryketchup', get_template_directory_uri()."/assets/js/vendor/mc/jquery.ketchup.all.min.js", array(), '1.0', true);
    wp_enqueue_script('foodera-mcmainscript', get_template_directory_uri()."/assets/js/vendor/mc/main.js", array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'foodera_register_scripts');




?>