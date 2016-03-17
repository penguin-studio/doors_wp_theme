<?php

// подключение меню
if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}
// подключение меню конец
add_theme_support('post-thumbnails');

define('WOOCOMMERCE_USE_CSS', false);
add_theme_support( 'woocommerce' );

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

// WooCommerce изменения начало
//-----------------------------

//Убираем заголовок страницы выводимой с помощью woocommerce_content()
add_filter('woocommerce_show_page_title','no_title',10);
function no_title(){return false;}
//функции по выводу картинки поста
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail');
//Отключаем ссылку перехода на товар
remove_action('woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open');
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_product_link_close');
//Отключаем вывод title
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title');
//Отключаем вывод сортировки и количество записей на странице
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
//Табы
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
//заголовок
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

add_filter( 'woocommerce_currency_symbol',  'my_fun' ,1,2);
function my_fun( $symbol , $currency ){
    if(strcmp($currency,'RUB') == 0){
        return 'руб.';
    }
}

/**
 * Добавляем свой вывод миниатбры в каталог товаров woocommerce
 */
add_action('woocommerce_before_shop_loop_item_title','penguin_woocommerce_template_loop_product_thumbnail');
function penguin_woocommerce_template_loop_product_thumbnail(){
    global $post;
    $template = "<img src='%src%' alt='%alt%' />";

    $img_src = get_the_post_thumbnail_url($post->ID,array(190,350));
    $img_alt = get_the_title($post->ID);

    $template = str_replace('%src%',$img_src,$template);
    $template = str_replace('%alt%',$img_alt,$template);
    return print $template;
}
/**
 * Добавляем свой вывод title ы каталог товаров woocommerce
 */
add_action('woocommerce_shop_loop_item_title','penguin_woocommerce_template_loop_product_title');
function penguin_woocommerce_template_loop_product_title(){
    global $post;
    $template = '<h3 class="bottom-title">'.get_the_title($post->ID).'</h3>';

    return print $template;
}
//----------------------------
// WooCommerce изменения конец