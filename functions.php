<?php

//Carrega os UIKIT



function custom_load_uikit()
{
    wp_enqueue_style('uikit', get_template_directory_uri() . '/css/uikit.min.css', array(), false, 'all');

    wp_enqueue_script('uikit', get_template_directory_uri() . '/js/uikit.min.js', array('jquery'), '3.0.0.30', true);

    wp_enqueue_script('uikit-icons', get_template_directory_uri() . '/js/uikit-icons.min.js', array('jquery'), '3.0.0.30', true);
}


function theme_style()
{

    wp_enqueue_style('theme_css', get_template_directory_uri() . '/css/theme.css');

    wp_enqueue_style('font_css', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
}

add_action('wp_enqueue_scripts', 'custom_load_uikit');

add_action('wp_enqueue_scripts', 'theme_style',);
