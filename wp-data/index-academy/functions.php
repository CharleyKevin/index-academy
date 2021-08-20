<?php
function index_academy_register_taxonomy(){
    register_taxonomy(
        'linguagens',
        'cursos',
        array(
            'labels' => array('name' => 'Linguagens'),
            'hierarchical' => true
        )
    );
}

add_action( 'init', 'index_academy_register_taxonomy' );

function index_academy_register_custom_post(){
    register_post_type( 'cursos',
        array(
            'labels' => array('name' => 'Cursos'),
            'public' => true,
            'menu_position' => 0,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-admin-site'
        )    
    );
}

add_action( 'init', 'index_academy_register_custom_post');



function index_academy_register_menu(){
    register_nav_menu( 'menu-navegacao', 'Menu' );
}

add_action( 'init', 'index_academy_register_menu');

function index_academy_add_theme_resources(){
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails');
}

add_action( 'after_setup_theme', 'index_academy_add_theme_resources');