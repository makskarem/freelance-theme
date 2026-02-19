<?php

function theme_enqueue_styles()
{
    wp_enqueue_style(
        'main-style', //(уникальное имя)
        get_template_directory_uri() . '/assets/css/style.css',
        [], // зависимости
        '1.0'
    );

    
    wp_enqueue_script(
        'theme_main_js', //уникальный id
        get_template_directory_uri() . '/assets/js/main.js',
        [], // зависимости (например ['jquery'])
        '1.0', // версия

        true // загрузить перед </body>
    );
    
}


add_action('wp_enqueue_scripts', 'theme_enqueue_styles'); //add_action - выполни эту функцию при загрузке scripts