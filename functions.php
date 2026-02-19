<?php

function theme_enqueue_styles(){
    wp_enqueue_style(
        'main-style', //(уникальное имя)
        get_template_directory_uri() . '/assets/css/style.css',
        [], // зависимости
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles'); //add_action - выполни эту функцию при загрузке scripts