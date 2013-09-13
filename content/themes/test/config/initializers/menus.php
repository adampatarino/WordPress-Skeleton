<?php

add_theme_support('menus');

function register_custom_menus() {
  register_nav_menu('main_menu', 'Header Menu');
}

add_action('init', 'register_custom_menus');

