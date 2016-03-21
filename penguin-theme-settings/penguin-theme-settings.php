<?php
/**
 * Разработал Максим Руденко
 * Вебстудия Penguin Studio
 * Сайт компании dp.pengstud.com
 * Дата: 19.03.2016
 */

/**
 * Константы
 */
define('PENGUIN_THEME_NAME','penguin-theme-settings');
define('PENGUIN_THEME_URL', get_template_directory().'/'.PENGUIN_THEME_NAME);
define('PENGUIN_THEME_URI', get_template_directory_uri().'/'.PENGUIN_THEME_NAME);

define('PENGUIN_THEME_INC_URL', PENGUIN_THEME_URL.'/include');

/**
 * Подключение файлов темы
 */

/**
 * Файл настройки woocommerce
 */
require PENGUIN_THEME_INC_URL.'/penguin-woocommerce-settings.php';





