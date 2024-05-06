<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Влад-Декор</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <div class="wrapper">
        <header class="z-10 w-full md-28 transition-colors fixed py-4">
            <div class="container md:gap-5 items-center justify-between flex md:pt-2 relative">
                    <!-- Меню кнопка -->
                    <a href="/" class="block sm:block md:hidden">
                        <svg width="29" height="16" viewBox="0 0 29 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.13208 1L1 8M1 8L8.13208 15M1 8H28" stroke="#363433" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>

                    <div class="justify-center items-center flex gap-5">
                        <a href="index.html" class="transform transition-all hover:scale-105">
                            <img class="m-auto md:w-60 w-40 object-cover" src="<?php echo get_template_directory_uri(); ?>/src/img/logo.svg" alt="Logo">
                        </a>


                        <div class="btn__menu hidden md:flex ml-12">
                            <button class="flex items-center gap-2 pl-10" style="border: 1px solid #76212E; border-radius: 5px; padding: 5px 30px;">
                                <svg class="h-6 w-6" viewBox="0 0 64 48">
                                    <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                    <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                    <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                                </svg>
                                <span class="text-black pl-2 font-bold">Каталог</span>
                            </button>        
                        </div>
                    </div>
                    
                    <!-- Пока дизайнер сказал не надо -->
                    <!-- <div class="mobile-menu ">
                        <div class="container text-black">
                            <div>
                                <a href="index.html" class="transform transition-all hover:scale-105">
                                    <img class="object-cover" src="./src/img/logo.svg" alt="Logo">
                                </a>
                            </div>

                            <ul class="flex items-start flex-wrap justify-start flex-col gap-5 pt-5">

                                <li><a class="text-black font-bold pb-5" href="payment.html">Доставка и оплата</a></li>
                                <li><a class="text-black font-bold pb-5" href="about.html">О компании</a></li>
                                <li><a class="text-black font-bold pb-5" href="contacts.html">Контакты</a></li>
                                <li><a class="text-black font-bold pb-5" href="opt.html">Оптовый отдел связи</a></li>
                            
                            </ul>

                            
                            <ul class="text-black font-bold pt-10">
                                <li class="pb-5 font-bold">
                                    Отдел декора:
                                </li>  
                                <li class="flex gap-2 pb-2 font-bold transform transition-all hover:scale-105">
                                    <a href="tel:+74232692080" class="flex gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>./src/img/icons/phone__pink.svg">
                                        +7 (423) 269-20-80
                                    </a> 
                                </li>
                                
                                <li class="flex gap-2 pb-2 font-bold transform transition-all hover:scale-105">
                                    <a href="tel:+74230016380" class="flex gap-2">
                                    <img width="20" src="./src/img/icons/sap__pink.svg">
                                        +7 (423) 001-63-80
                                    </a> 
                                </li>
                                
                                <li class="pb-5 font-bold pt-5">
                                    Розничный отдел срезки:
                                </li>  
                                
                                <li class="flex gap-2 pb-2 font-bold transform transition-all hover:scale-105">
                                    <a href="tel:+79662763308" class="flex gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>./src/img/icons/phone__pink.svg">
                                        +7 (966) 276-33-08
                                    </a> 
                                </li>
                            </ul>
                            
                            <ul class="text-black font-bold pt-5">    
                                <li class="pb-5 font-bold">
                                    Оптовый отдел срезки:
                                </li>  
                                
                                <li class="flex gap-2 pb-2 font-bold transform transition-all hover:scale-105">
                                    <a href="tel:+74232692080" class="flex gap-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>./src/img/icons/phone__pink.svg">
                                        +7 (423) 269-20-80
                                    </a> 
                                </li>
                                
                                <li class="flex gap-2 pb-2 font-bold transform transition-all hover:scale-105">
                                    <a href="tel:+79022763308" class="flex gap-2">
                                    <img width="20" src="./src/img/icons/sap__pink.svg">
                                        +7 (902) 483-20-80
                                    </a> 
                                </li>
                            </ul>
                        </div>
                    </div> -->

                  
                
                    <ul class="gap-10 hidden md:flex items-center flex-wrap justify-between">
                        <li><a class="text-black hover:text-red transition-colors nav-link font-bold" href="payment_and_order">Доставка и оплата</a></li>
                        <li><a class="text-black hover:text-red transition-colors nav-link font-bold" href="about">О компании</a></li>
                        <li><a class="text-black hover:text-red transition-colors nav-link font-bold" href="contacts">Контакты</a></li>
                        <li><a class="text-black hover:text-red transition-colors nav-link font-bold" href="opt">Оптовый отдел связи</a></li>
                    </ul>

                      <div class="flex gap-5 justify-center items-center">

                        
                        <div class="relative block">
                            <div class="header-wrapper header-wrapper--search">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/search.svg"
                                    width="20" height="20" alt="cart">
                                <div class="modal-content">
                                    <?php get_search_form(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="relative hidden xs:hidden sm:hidden md:block">
                            <div class="header-wrapper header-wrapper--search">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/cart.svg"
                                    width="20" height="20" alt="cart">
                                <div class="modal-content">
                                <div class="mini-card">
                                        <?php the_widget('WC_Widget_Cart', 'title=') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relative hidden xs:hidden sm:hidden md:block">
                            <div class="header-wrapper header-wrapper--search">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/favorite.svg"
                                    width="20" height="20" alt="cart">
                                <div class="modal-content">
                                    Избранное
                                </div>
                            </div>
                        </div>

                         <!-- Мобильная кнопка -->
                         <!-- <div class="btn__menu--mobile gap-10 md:hidden flex">
                            <button class="flex items-center gap-2 pl-10 pr-2 py-1 rounded">
                                <svg class="h-3 w-3" viewBox="0 0 64 48">
                                    <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                    <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                    <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                                </svg>
                            </button>   
                        </div> -->
                    </div>
            </div>

            <div class="container relative"> 
                <div class="section__menu">
                    <div class="menu overflow-hidden ">
                        <ul class="flex flex-col text-black">
                            <li class="sub-menu px-4">
                                <a class="flex gap-3 items-center p-2 bg-n">
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/menu__img/cat_1.svg" alt="" class="bg-red transform transition-all hover:bg-persik p-2 rounded-md">
                                    <span>Упаковочный материал</span>
                                </a>
                                <ul class="sub-menu">
                                        <li>
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/menu__products/product_1.png" alt="">
                                            <span>Коробки шляпные</span>
                                        </li>
                                        <li>
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/menu__products/product_2.png" alt="">
                                            Коробки шляпные
                                        </li>
                                        <li>
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/menu__products/product_3.png" alt="">
                                            Коробки шляпные
                                        </li>
                                        <li>
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/menu__products/product_4.png" alt="">
                                            Коробки шляпные
                                        </li>
                                        <li>
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/menu__products/product_4.png" alt="">
                                            Коробки шляпные
                                        </li>
                                        <li>
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/menu__products/product_4.png" alt="">
                                            Коробки шляпные
                                        </li>
                                </ul>
                            </li>
                        </ul>   
                        <div class="verictical__line"></div>
                    </div>
                </div>
            </div>
        </header>