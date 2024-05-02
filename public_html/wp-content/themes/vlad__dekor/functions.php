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


// функция для добавления класса для li 

// class Walker_Nav_Menu_Submenu extends Walker_Nav_Menu {
//     function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
//         $output .= '<li class="sub-menu">';
//         // $output .= '<a href="' . $item->url . '">' . $item->title . '</a>';
//         $output .= '</li>';
//     }
// }

// add_filter( 'wp_nav_menu_args', 'my_custom_nav_menu_args' );

// function my_custom_nav_menu_args( $args ) {
//     $args['walker'] = new Walker_Nav_Menu_Submenu();
//     return $args;
// }


if (class_exists('WooCommerce')) {
    require_once (get_template_directory() . '/woocommers.php');
}

// Функция замены текста в кнопках "Добавить в корзину"

// add_filter('add_to_cart_text', 'woo_custom_product_add_to_cart_text');            // < 2.1
// add_filter('woocommerce_product_add_to_cart_text', 'woo_custom_product_add_to_cart_text');  // 2.1 +

// function woo_custom_product_add_to_cart_text()
// {

//     return __('В корзину', 'woocommerce');
// }

// // Замена текста 
// add_filter('gettext', 'translate_text');
// add_filter('ngettext', 'translate_text');

// function translate_text($translated)
// {
//     $translated = str_ireplace('Подытог', 'Сумма', $translated);
//     return $translated;
// }

?>