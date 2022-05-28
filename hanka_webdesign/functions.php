<?php 

function hanka_enqueue_style() {
    wp_enqueue_style("hanka-style", get_stylesheet_uri());
    wp_enqueue_style("bootstrap", "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css");
;
}
add_action("wp_enqueue_scripts", "hanka_enqueue_style");

function hanka_register_menu() {
    register_nav_menu("main-menu", "Main menu");
}
add_action("init", "hanka_register_menu");

function collectiveray_load_js_script() {
    wp_enqueue_script( 'js-file', get_template_directory_uri() . '/myscript.js');
  }
add_action('wp_enqueue_scripts', 'collectiveray_load_js_script');

?>