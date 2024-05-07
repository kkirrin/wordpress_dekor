<?php

// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');

// добавляет возможность выбрать img у записи(post) из админки
add_theme_support('post-thumbnails', array('post'));

// подключение и настройка меню через админку
add_action('after_setup_theme', 'add_menu');

function theme_add_scripts()
{
    // подключаем файл baguetteBox.css
    wp_enqueue_style('baguetteBox-css', get_template_directory_uri() . '/css/baguetteBox.min.css');


    // подключаем файл animate.css
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');

    // подключаем файл animate.css
    wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/css/swiper-bundle.min.css');


    // подключаем основной файл стилей темы
    wp_enqueue_style('style', get_stylesheet_uri(), '', '');

    //---------------------------------------------------------------------------------------------------------------------------------------------

    // Подключаем основной main.js файл
    // Для swiper
    wp_enqueue_script('swiper-bundle.min', get_template_directory_uri() . '/js/swiper-bundle.min.js');
    //  Для картинок 
    wp_enqueue_script('baguettebox', get_template_directory_uri() . '/js/baguettebox.js');
    // Для параллакса
    wp_enqueue_script('simpleParallax', get_template_directory_uri() . '/js/simpleParallax.js');
    // Для wow
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.js');
    // Для скролла
    wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
}

function add_menu()
{
    register_nav_menu('category', 'Категории');
}


if (class_exists('WooCommerce')) {
    require_once (get_template_directory() . '/woocommers.php');
}


// // Замена текста 
add_filter('gettext', 'translate_text');
add_filter('ngettext', 'translate_text');


function translate_text($translated)
{
    $translated = str_ireplace('Похожие товары', 'С этим покупают', $translated);
    return $translated;
}

?>