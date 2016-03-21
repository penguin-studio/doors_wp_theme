<?php

// подключение меню
if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}
// подключение меню конец
add_theme_support('post-thumbnails');



if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'Боковая колонка интернет магазина',
        'id' => 'shop_sidebar',
        'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}

require get_template_directory().'/penguin-theme-settings/penguin-theme-settings.php';