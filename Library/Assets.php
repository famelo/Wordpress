<?php

function famelo_assets() {
  wp_enqueue_style('template_css', get_template_directory_uri() . '/Assets/Styles/Main.less');
  wp_register_script('template_js', get_template_directory_uri() . '/Assets/Scripts/Main.js');
  wp_enqueue_script('template_js');
}
add_action('wp_enqueue_scripts', 'famelo_assets', 100);
