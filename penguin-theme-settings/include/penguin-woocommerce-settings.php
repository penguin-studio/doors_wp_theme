<?php
/**
 * Разработал Максим Руденко
 * Вебстудия Penguin Studio
 * Сайт компании dp.pengstud.com
 * Дата: 19.03.2016
 */

//Убираем стандартные стили woocommerce
//define('WOOCOMMERCE_USE_CSS', false);
//Устанавливаем поддержку темой woocommerce
//add_theme_support( 'woocommerce' );

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

add_filter( 'woocommerce_currency_symbol',  'penguin_currency_symbol' ,1,2);
function penguin_currency_symbol( $symbol , $currency ){
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

    $img_src = get_the_post_thumbnail_url($post->ID,array(150,150));
    $img_alt = get_the_title($post->ID);

    $template = str_replace('%src%',$img_src,$template);
    $template = str_replace('%alt%',$img_alt,$template);
    return print $template;
}
/**
 * Добавляем свой вывод title в каталог товаров woocommerce
 */
add_action('woocommerce_shop_loop_item_title','penguin_woocommerce_template_loop_product_title');
function penguin_woocommerce_template_loop_product_title(){
    global $post;
    $template = '<h3 class="bottom-title">'.wp_trim_words( get_the_title($post->ID), 5, '...' ).'</h3>';

    return print $template;
}
/**
 *  Добавление дополнительных полей к товару
 */
function woocommerce_additional_fields(){
    global $post;
    wp_nonce_field( basename( __FILE__ ), 'woo-additional-field' );

    $door_material     = get_post_meta($post->ID,'door_material', true);
    $door_size         = get_post_meta($post->ID,'door_size', true);
    $door_manufacturer = get_post_meta($post->ID,'door_manufacturer', true);
    $door_color         = get_post_meta($post->ID,'door_color', true);


    ?>
    <style>
        table td{
            vertical-align: middle;
        }
    </style>

    <table class="add-box">
        <tr valign="top">
            <td><h3>Материал двери:</h3></td>
            <td><input style="width:300px;" type="text" size="10" name="door_material" value="<?php echo $door_material; ?>" /></td>
        </tr>
        <tr valign="top">
            <td><h3>Размер двери:</h3></td>
            <td><input style="width:300px;" type="text" size="10" name="door_size" value="<?php echo $door_size; ?>" /></td>
        </tr>
        <tr valign="top">
            <td><h3>Произаодитель двери:</h3></td>
            <td><input style="width:300px;" type="text" size="10" name="door_manufacturer" value="<?php echo $door_manufacturer; ?>" /></td>
        </tr>
        <tr valign="top">
            <td><h3>Цвет двери:</h3></td>
            <td><input style="width:300px;" type="text" size="10" name="door_color" value="<?php echo $door_color; ?>" /></td>
        </tr>
    </table>
    <?php
}
function woocommerce_additional_fields_save ( $post_id ) {
    // проверяем, пришёл ли запрос со страницы с метабоксом
    if ( !isset( $_POST['woo-additional-field'] )
        || !wp_verify_nonce( $_POST['woo-additional-field'], basename( __FILE__ ) ) )
        return $post_id;
    // проверяем, является ли запрос автосохранением
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
        return $post_id;
    // проверяем, права пользователя, может ли он редактировать записи
    if ( !current_user_can( 'edit_post', $post_id ) )
        return $post_id;
    // теперь также проверим тип записи
    $post = get_post($post_id);

    if ($post->post_type == 'product')
    {
        update_post_meta($post->ID,'door_material', $_POST['door_material']);
        update_post_meta($post->ID,'door_size', $_POST['door_size']);
        update_post_meta($post->ID,'door_manufacturer', $_POST['door_manufacturer']);
        update_post_meta($post->ID,'door_color', $_POST['door_color']);
    }
    return $post_id;
}
add_action('save_post', 'woocommerce_additional_fields_save');
function load_woocommerce_additional_fields() {
    add_meta_box('', 'Дополнительные данные о товаре', 'woocommerce_additional_fields', 'product', 'normal', 'high');
}
add_action( 'admin_menu', 'load_woocommerce_additional_fields' );

add_filter( 'woocommerce_checkout_fields' , 'woo_remove_billing_checkout_fields' );
function woo_remove_billing_checkout_fields( $fields ) {
    unset($fields['billing']['billing_company']); // убираем опцию указания компании
    unset($fields['billing']['billing_country']); // убираем страну
    unset($fields['billing']['billing_address_1']); // убираем первую строку адреса
    unset($fields['billing']['billing_address_2']); // убираем вторую строку адреса
    unset($fields['billing']['billing_postcode']); // убираем поле индекса
    unset($fields['billing']['billing_city']); //Убираем поле населённый пункт
    unset($fields['billing']['billing_state']); // убираем поле область/регион
    unset($fields['billing']['create-account']); // убираем поле область/регион

    return $fields;
}


