<?php
function index_academy_register_menu(){
    register_nav_menu( 'menu-navegacao', 'Menu' );
}

add_action( 'init', 'index_academy_register_menu');

function index_academy_add_theme_resources(){
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails');
}

add_action( 'after_setup_theme', 'index_academy_add_theme_resources');