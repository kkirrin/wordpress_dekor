<?php 
    /*
    Template Name: vlad__dekor
    */
?>

<?php get_header(); ?>

<main>
    <h1 class="visually-hidden">Скрытый заголовок</h1>

    <!-- Главный слайдер -->
    <section class="main-swiper overflow-hidden" data-scroll>
        <div class="main-wrapper overflow-hidden relative ">

            <div class="absolute z-[3] top-20 items-center justify-center w-full p-5 flex sm:flex md:hidden">
                <input class="w-full p-5 rounded-md" type="text">
                <img class="absolute right-0 mr-10" src="<?php echo get_template_directory_uri(); ?><?php echo get_template_directory_uri(); ?>/src/img/icons/search.svg" alt="">
            </div>
            
            <div class="main-item relative h-[70vh] md:h-screen">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper items-start justify-start h-[70vh] md:h-screen">
                    <div class="swiper-slide flex items-center justify-start relative -z-10 md:max-h-screen bg-persik h-screen md:rounded-bl-[150px]">
                        <div class="container relative z-10 flex items-start justify-start flex-col">
                            <h2 class="text-center text-black z-10 font-bold text-xl uppercase text-playfire">
                                Влад-Декор
                            </h2>
                            <p class="pt-10 md:pt-24 z-10 text-start md:text-center text-xl md:text-4xl text-playfire text-black">Оптовый центр цветов </p>
                            <br class="hidden md:block">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/main/pattern.png" alt="" class="hidden md:block z-10 transform transition-all hover:scale-105 absolute -bottom-16"><span class="pl-0 md:pl-56 text-xl md:text-4xl text-playfire text-black">
                                и товаров для флористики 

                            </span>
                            <a href="shop" class="flex items-center justify-between bg-pink rounded-md py-[14px] px-[70px] text-white font-normal mt-5 ml-0 md:ml-[220px] z-[999]">
                                <span>Перейти в каталог</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="" class="right-5 z-10 transform transition-all hover:scale-105 absolute">
                            </a>
                            
                            <div class="relative">
                                <img class="absolute right-0 z-10" src="<?php echo get_template_directory_uri(); ?>" alt="">
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/main/flowers.png" alt="" class="parallax__img__first hidden sm:hidden md:block transform transition-all hover:scale-105 absolute -right-24 md:-right-14 xl:-right-10 -bottom-32 md:-bottom-10 xl:-bottom-16 z-10">

                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/main/flowers_1_small.png" alt="" class="parallax__img__first block sm:block md:hidden scale-50 md:scale-100 transform transition-all hover:scale-50 md:hover:scale-105 absolute -right-24 md:right-14 -bottom-32 md:bottom-0 xl:bottom-10 z-10">
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/main/present.png" alt="" class="parallax__img__first scale-50 md:scale-100 transform transition-all hover:scale-50 md:hover:scale-105 absolute -left-40 md:left-52 -bottom-16 md:-bottom-[10px] z-10">
                    </div>


                    <div class="swiper-slide flex items-center justify-start relative -z-10 md:max-h-screen bg-persik h-screen md:rounded-bl-[150px]" style="background: linear-gradient(90deg, rgba(255,211,185,1) 0%, rgba(239,222,212,1) 100%);">
                        <div class="container relative z-10 flex items-start justify-start flex-col">
                            <h2 class="text-center text-black z-10 font-bold text-xl uppercase text-playfire">
                                Влад-Декор
                            </h2>
                            <p class="pt-10 md:pt-24 z-10 text-start md:text-center text-xl md:text-4xl text-playfire text-black">Оптовый центр цветов </p>
                            <br class="hidden md:block">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/main/pattern.png" alt="" class="hidden md:block z-10 transform transition-all hover:scale-105 absolute -bottom-16"><span class="pl-0 md:pl-56 text-xl md:text-4xl text-playfire text-black">
                                и товаров для флористики 

                            </span>
                            <a href="shop" class="flex items-center justify-between bg-pink rounded-md py-[14px] px-[70px] text-white font-normal mt-5 ml-0 md:ml-[220px] z-[999]">
                                <span>Перейти в каталог</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="" class="right-5 z-10 transform transition-all hover:scale-105 absolute">
                            </a>
                            
                            <div class="relative">
                                <img class="absolute right-0 z-10" src="<?php echo get_template_directory_uri(); ?>" alt="">
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/main/flowers.png" alt="" class="parallax__img__first hidden sm:hidden md:block transform transition-all hover:scale-105 absolute -right-24 md:-right-14 xl:-right-10 -bottom-32 md:-bottom-10 xl:-bottom-16 z-10">

                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/main/flowers_1_small.png" alt="" class="parallax__img__first block sm:block md:hidden scale-50 md:scale-100 transform transition-all hover:scale-50 md:hover:scale-105 absolute -right-24 md:right-14 -bottom-32 md:bottom-0 xl:bottom-10 z-10">
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/main/present.png" alt="" class="parallax__img__first scale-50 md:scale-100 transform transition-all hover:scale-50 md:hover:scale-105 absolute -left-40 md:left-52 -bottom-16 md:-bottom-[10px] z-10">
                    </div>
                </div>
            </div>
    </div>
    </section>

        <!-- Популярные категории -->
    <section class="section__popular" data-scroll>
        <div class="container">
            <h2 class="vera__title text-3xl md:text-6xl py-5 font-normal wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">Популярные категории</h2>
            <div class="grid grid-cols-2 xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2 md:gap-10">
                <div class="popular__card rounded-md overflow-hidden relative z-0">
                    <img class="object-cover" src="<?php echo get_template_directory_uri(); ?>/src/img/category/category_1.png" alt="текст">
                    <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                        <p class="text-xs md:font-base font-semibold text-start">Упаковочный материал</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                    </div>
                </div>

                <?php
                    $args = array(
                        'post_type' => 'product',
                        'taxonomy' => 'product_cat',
                    );

                    print_r(get_terms( $args ));

                    $query = new WP_Query($args)
                ?>

                <!-- <div class="popular__card rounded-md overflow-hidden relative z-0">
                    <img class="object-cover" src="<?php echo get_template_directory_uri(); ?>/src/img/category/category_2.png" alt="текст">
                    <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                        <p class="text-xs md:font-base font-semibold text-start">Лента</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                    </div>
                </div>
                <div class="popular__card rounded-md overflow-hidden relative z-0">
                    <img class="object-cover" src="<?php echo get_template_directory_uri(); ?>/src/img/category/category_3.png" alt="текст">
                    <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                        <p class="text-xs md:font-base font-semibold text-start">Коробки, кашпо и сумочки</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                    </div>
                </div>
                <div class="popular__card rounded-md overflow-hidden relative z-0">
                    <img class="object-cover" src="<?php echo get_template_directory_uri(); ?>/src/img/category/category_4.png" alt="текст">
                    <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                        <p class="text-xs md:font-base font-semibold text-start">Корзины, плетеные изделия</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                    </div>
                </div>
                <div class="popular__card rounded-md overflow-hidden relative z-0">
                    <img class="object-cover" src="<?php echo get_template_directory_uri(); ?>/src/img/category/category_5.png" alt="текст">
                    <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                        <p class="text-xs md:font-base font-semibold text-start">Октрытки и конверты</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                    </div>
                </div>
                <div class="popular__card rounded-md overflow-hidden relative z-0">
                    <img class="object-cover" src="<?php echo get_template_directory_uri(); ?>/src/img/category/category_6.png" alt="текст">
                    <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                        <p class="text-xs md:font-base font-semibold text-start">Сухоцветы и стабилизация</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                    </div>
                </div>
                <div class="popular__card rounded-md overflow-hidden relative z-0">
                    <img class="object-cover" src="<?php echo get_template_directory_uri(); ?>/src/img/category/category_7.png" alt="текст">
                    <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                        <p class="text-xs md:font-base font-semibold text-start">Расходные материалы</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                    </div>
                </div>
                <div class="popular__card rounded-md overflow-hidden relative z-0">
                    <img class="object-cover" src="<?php echo get_template_directory_uri(); ?>/src/img/category/category_8.png" alt="текст">
                    <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                        <p class="text-xs md:font-base font-semibold text-start">Инструменты</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                    </div>
                </div>
                <div class="popular__card rounded-md overflow-hidden relative z-0">
                    <img class="object-cover" src="<?php echo get_template_directory_uri(); ?>/src/img/category/category_9.png" alt="текст">
                    <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                        <p class="text-xs md:font-base font-semibold text-start">Сувениры</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                    </div>
                </div>
                <div class="popular__card rounded-md overflow-hidden relative z-0">
                    <img class="object-cover" src="<?php echo get_template_directory_uri(); ?>/src/img/category/category_10.png" alt="текст">
                    <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                        <p class="text-xs md:font-base font-semibold text-start">Ящики деревянные</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                    </div>
                </div>
                <div class="popular__card rounded-md overflow-hidden relative z-0">
                    <img class="object-cover" src="<?php echo get_template_directory_uri(); ?>/src/img/category/category_11.png" alt="текст">
                    <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                        <p class="text-xs md:font-base font-semibold text-start">Садовые товары</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                    </div>
                </div>
                <div class="popular__card rounded-md overflow-hidden relative z-0">
                    <img class="object-cover" src="<?php echo get_template_directory_uri(); ?>/src/img/category/category_12.png" alt="текст">
                    <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                        <p class="text-xs md:font-base font-semibold text-start">Все категории</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Новинки -->
    <section class="section__new swiper-popular" data-scroll>
            <div class="container">
                <div class="flex justify-between items-center">
                    <h2 class="vera__title text-3xl md:text-6xl py-5 font-normal wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">Новинки</h2>
                    <div class="flex gap-5 slider__btns">
                        <svg class="prev new__items__prev" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="24" transform="matrix(-1 0 0 1 50 0)" stroke="#CFB2A1" stroke-width="2"/>
                            <path d="M34 26H35V24H34V26ZM15.2929 24.2929C14.9024 24.6834 14.9024 25.3166 15.2929 25.7071L21.6569 32.0711C22.0474 32.4616 22.6805 32.4616 23.0711 32.0711C23.4616 31.6805 23.4616 31.0474 23.0711 30.6569L17.4142 25L23.0711 19.3431C23.4616 18.9526 23.4616 18.3195 23.0711 17.9289C22.6805 17.5384 22.0474 17.5384 21.6569 17.9289L15.2929 24.2929ZM34 24L16 24V26L34 26V24Z" fill="#CFB2A1"/>
                        </svg>

                        <svg class="next new__items__next" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="24" stroke="#CFB2A1" stroke-width="2"/>
                            <path d="M16 24H15V26H16V24ZM34.7071 25.7071C35.0976 25.3166 35.0976 24.6834 34.7071 24.2929L28.3431 17.9289C27.9526 17.5384 27.3195 17.5384 26.9289 17.9289C26.5384 18.3195 26.5384 18.9526 26.9289 19.3431L32.5858 25L26.9289 30.6569C26.5384 31.0474 26.5384 31.6805 26.9289 32.0711C27.3195 32.4616 27.9526 32.4616 28.3431 32.0711L34.7071 25.7071ZM16 26L34 26V24L16 24V26Z" fill="#CFB2A1"/>
                        </svg>
                    </div>
                </div>
                <div class="new-items w-0 min-w-[100%] overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide w-auto rounded-md overflow-hidden">
                            <div class="relative new__card flex flex-col justify-between">
                                <div class="slider-container__inner__inner">
                                    <div class="slider overflow-hidden w-auto">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_1.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_2.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_3.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_4.png">
                                    </div>
                                    
                                    <button class="custom-bullet custom-bullet--prev z-100"></button>
                                    <button class="custom-bullet custom-bullet--next z-100"></button>
                                    
                                </div>
                                <button class="absolute right-2 top-2 z-20">
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/favorite.svg">
                                </button>
                                    
                            </div>
                            <div class="flex flex-col gap-1 pt-3">
                                <div class="flex gap-2">
                                    <p class="font-base font-extrabold">Набор белого хлопка «Сливочные облака», 10 шт </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                                </div>
                                <p>Описание: хлопок, высота 40см, 10шт</p>
                                <p>Артикул: 6666666</p>

                                <p class="pt-5">Цвет</p>
                                <div class="inputs-wrapper flex gap-2 py-4">
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                </div>
                            </div>


                                
                                <div class="flex gap-2 justify-between items-center flex-wrap">
                                    <div class="flex gap-1 pt-3">
                                        <span class="font-extrabold">666р /</span>  шт
                                    </div> 
                                    
                                    <div class="flex gap-2 justify-center items-center order-1 md:-order-1">
                                        <div class="border border-gray rounded-md py-3 px-5">
                                            <button class="font-extrabold pr-2">
                                                -
                                            </button>
                                            1
                                            <button class="font-extrabold pl-2">
                                                +
                                            </button>
                                            
                                        </div>
                                        
                                        <button class="bg-red p-3 rounded-md">
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/cart__white.svg">
                                        </button>
                                    </div>

                                </div>
                                

                            
                        </div> 
                        <div class="swiper-slide w-auto rounded-md overflow-hidden">
                            <div class="relative new__card flex flex-col justify-between">
                                <div class="slider-container__inner__inner">
                                    <div class="slider overflow-hidden w-auto">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_1.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_2.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_3.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_4.png">
                                    </div>
                                    
                                    <button class="custom-bullet custom-bullet--prev z-100"></button>
                                    <button class="custom-bullet custom-bullet--next z-100"></button>
                                    
                                </div>
                                <button class="absolute right-2 top-2 z-20">
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/favorite.svg">
                                </button>
                                    
                            </div>
                            <div class="flex flex-col gap-1 pt-3">
                                <div class="flex gap-2">
                                    <p class="font-base font-extrabold">Набор белого хлопка «Сливочные облака», 10 шт </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                                </div>
                                <p>Описание: хлопок, высота 40см, 10шт</p>
                                <p>Артикул: 6666666</p>

                                <p class="pt-5">Цвет</p>
                                <div class="inputs-wrapper flex gap-2 py-4">
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                </div>
                            </div>


                                
                                <div class="flex gap-2 justify-between items-center flex-wrap">
                                    <div class="flex gap-1 pt-3">
                                        <span class="font-extrabold">666р /</span>  шт
                                    </div> 
                                    
                                    <div class="flex gap-2 justify-center items-center order-1 md:-order-1">
                                        <div class="border border-gray rounded-md py-3 px-5">
                                            <button class="font-extrabold pr-2">
                                                -
                                            </button>
                                            1
                                            <button class="font-extrabold pl-2">
                                                +
                                            </button>
                                            
                                        </div>
                                        
                                        <button class="bg-red p-3 rounded-md">
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/cart__white.svg">
                                        </button>
                                    </div>

                                </div>
                                

                            
                        </div> 
                        <div class="swiper-slide w-auto rounded-md overflow-hidden">
                            <div class="relative new__card flex flex-col justify-between">
                                <div class="slider-container__inner__inner">
                                    <div class="slider overflow-hidden w-auto">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_1.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_2.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_3.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_4.png">
                                    </div>
                                    
                                    <button class="custom-bullet custom-bullet--prev z-100"></button>
                                    <button class="custom-bullet custom-bullet--next z-100"></button>
                                    
                                </div>
                                <button class="absolute right-2 top-2 z-20">
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/favorite.svg">
                                </button>
                                    
                            </div>
                            <div class="flex flex-col gap-1 pt-3">
                                <div class="flex gap-2">
                                    <p class="font-base font-extrabold">Набор белого хлопка «Сливочные облака», 10 шт </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                                </div>
                                <p>Описание: хлопок, высота 40см, 10шт</p>
                                <p>Артикул: 6666666</p>

                                <p class="pt-5">Цвет</p>
                                <div class="inputs-wrapper flex gap-2 py-4">
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                </div>
                            </div>


                                
                                <div class="flex gap-2 justify-between items-center flex-wrap">
                                    <div class="flex gap-1 pt-3">
                                        <span class="font-extrabold">666р /</span>  шт
                                    </div> 
                                    
                                    <div class="flex gap-2 justify-center items-center order-1 md:-order-1">
                                        <div class="border border-gray rounded-md py-3 px-5">
                                            <button class="font-extrabold pr-2">
                                                -
                                            </button>
                                            1
                                            <button class="font-extrabold pl-2">
                                                +
                                            </button>
                                            
                                        </div>
                                        
                                        <button class="bg-red p-3 rounded-md">
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/cart__white.svg">
                                        </button>
                                    </div>

                                </div>
                                

                            
                        </div> 
                        <div class="swiper-slide w-auto rounded-md overflow-hidden">
                            <div class="relative new__card flex flex-col justify-between">
                                <div class="slider-container__inner__inner">
                                    <div class="slider overflow-hidden w-auto">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_1.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_2.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_3.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_4.png">
                                    </div>
                                    
                                    <button class="custom-bullet custom-bullet--prev z-100"></button>
                                    <button class="custom-bullet custom-bullet--next z-100"></button>
                                    
                                </div>
                                <button class="absolute right-2 top-2 z-20">
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/favorite.svg">
                                </button>
                                    
                            </div>
                            <div class="flex flex-col gap-1 pt-3">
                                <div class="flex gap-2">
                                    <p class="font-base font-extrabold">Набор белого хлопка «Сливочные облака», 10 шт </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                                </div>
                                <p>Описание: хлопок, высота 40см, 10шт</p>
                                <p>Артикул: 6666666</p>

                                <p class="pt-5">Цвет</p>
                                <div class="inputs-wrapper flex gap-2 py-4">
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                </div>
                            </div>


                                
                                <div class="flex gap-2 justify-between items-center flex-wrap">
                                    <div class="flex gap-1 pt-3">
                                        <span class="font-extrabold">666р /</span>  шт
                                    </div> 
                                    
                                    <div class="flex gap-2 justify-center items-center order-1 md:-order-1">
                                        <div class="border border-gray rounded-md py-3 px-5">
                                            <button class="font-extrabold pr-2">
                                                -
                                            </button>
                                            1
                                            <button class="font-extrabold pl-2">
                                                +
                                            </button>
                                            
                                        </div>
                                        
                                        <button class="bg-red p-3 rounded-md">
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/cart__white.svg">
                                        </button>
                                    </div>

                                </div>
                                

                            
                        </div> 
                        <div class="swiper-slide w-auto rounded-md overflow-hidden">
                            <div class="relative new__card flex flex-col justify-between">
                                <div class="slider-container__inner__inner">
                                    <div class="slider overflow-hidden w-auto">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_1.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_2.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_3.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_4.png">
                                    </div>
                                    
                                    <button class="custom-bullet custom-bullet--prev z-100"></button>
                                    <button class="custom-bullet custom-bullet--next z-100"></button>
                                    
                                </div>
                                <button class="absolute right-2 top-2 z-20">
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/favorite.svg">
                                </button>
                                    
                            </div>
                            <div class="flex flex-col gap-1 pt-3">
                                <div class="flex gap-2">
                                    <p class="font-base font-extrabold">Набор белого хлопка «Сливочные облака», 10 шт </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                                </div>
                                <p>Описание: хлопок, высота 40см, 10шт</p>
                                <p>Артикул: 6666666</p>

                                <p class="pt-5">Цвет</p>
                                <div class="inputs-wrapper flex gap-2 py-4">
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                </div>
                            </div>


                                
                                <div class="flex gap-2 justify-between items-center flex-wrap">
                                    <div class="flex gap-1 pt-3">
                                        <span class="font-extrabold">666р /</span>  шт
                                    </div> 
                                    
                                    <div class="flex gap-2 justify-center items-center order-1 md:-order-1">
                                        <div class="border border-gray rounded-md py-3 px-5">
                                            <button class="font-extrabold pr-2">
                                                -
                                            </button>
                                            1
                                            <button class="font-extrabold pl-2">
                                                +
                                            </button>
                                            
                                        </div>
                                        
                                        <button class="bg-red p-3 rounded-md">
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/cart__white.svg">
                                        </button>
                                    </div>

                                </div>
                                

                            
                        </div> 
                        <div class="swiper-slide w-auto rounded-md overflow-hidden">
                            <div class="relative new__card flex flex-col justify-between">
                                <div class="slider-container__inner__inner">
                                    <div class="slider overflow-hidden w-auto">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_1.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_2.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_3.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_4.png">
                                    </div>
                                    
                                    <button class="custom-bullet custom-bullet--prev z-100"></button>
                                    <button class="custom-bullet custom-bullet--next z-100"></button>
                                    
                                </div>
                                <button class="absolute right-2 top-2 z-20">
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/favorite.svg">
                                </button>
                                    
                            </div>
                            <div class="flex flex-col gap-1 pt-3">
                                <div class="flex gap-2">
                                    <p class="font-base font-extrabold">Набор белого хлопка «Сливочные облака», 10 шт </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                                </div>
                                <p>Описание: хлопок, высота 40см, 10шт</p>
                                <p>Артикул: 6666666</p>

                                <p class="pt-5">Цвет</p>
                                <div class="inputs-wrapper flex gap-2 py-4">
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                </div>
                            </div>


                                
                                <div class="flex gap-2 justify-between items-center flex-wrap">
                                    <div class="flex gap-1 pt-3">
                                        <span class="font-extrabold">666р /</span>  шт
                                    </div> 
                                    
                                    <div class="flex gap-2 justify-center items-center order-1 md:-order-1">
                                        <div class="border border-gray rounded-md py-3 px-5">
                                            <button class="font-extrabold pr-2">
                                                -
                                            </button>
                                            1
                                            <button class="font-extrabold pl-2">
                                                +
                                            </button>
                                            
                                        </div>
                                        
                                        <button class="bg-red p-3 rounded-md">
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/cart__white.svg">
                                        </button>
                                    </div>

                                </div>
                                

                            
                        </div> 
                    </div>
                </div>
            </div>
    </section>


    <!-- Хиты продаж -->
    <section class="section__best swiper-best" data-scroll>
            <div class="container">
                <div class="flex justify-between items-center">
                    <h2 class="vera__title text-3xl md:text-6xl py-5 font-normal wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">Хиты продаж</h2>
                    <div class="flex gap-5 slider__btns">
                        <svg class="prev best__items__prev" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="24" transform="matrix(-1 0 0 1 50 0)" stroke="#CFB2A1" stroke-width="2"/>
                            <path d="M34 26H35V24H34V26ZM15.2929 24.2929C14.9024 24.6834 14.9024 25.3166 15.2929 25.7071L21.6569 32.0711C22.0474 32.4616 22.6805 32.4616 23.0711 32.0711C23.4616 31.6805 23.4616 31.0474 23.0711 30.6569L17.4142 25L23.0711 19.3431C23.4616 18.9526 23.4616 18.3195 23.0711 17.9289C22.6805 17.5384 22.0474 17.5384 21.6569 17.9289L15.2929 24.2929ZM34 24L16 24V26L34 26V24Z" fill="#CFB2A1"/>
                        </svg>

                        <svg class="next best__items__next" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="24" stroke="#CFB2A1" stroke-width="2"/>
                            <path d="M16 24H15V26H16V24ZM34.7071 25.7071C35.0976 25.3166 35.0976 24.6834 34.7071 24.2929L28.3431 17.9289C27.9526 17.5384 27.3195 17.5384 26.9289 17.9289C26.5384 18.3195 26.5384 18.9526 26.9289 19.3431L32.5858 25L26.9289 30.6569C26.5384 31.0474 26.5384 31.6805 26.9289 32.0711C27.3195 32.4616 27.9526 32.4616 28.3431 32.0711L34.7071 25.7071ZM16 26L34 26V24L16 24V26Z" fill="#CFB2A1"/>
                        </svg>
                    </div>
                </div>
                <div class="best-items w-0 min-w-[100%] overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide w-auto rounded-md overflow-hidden">
                            <div class="relative new__card flex flex-col justify-between">
                                <div class="slider-container__inner__inner">
                                    <div class="slider overflow-hidden w-auto">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_1.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_2.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_3.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_4.png">
                                    </div>
                                    
                                    <button class="custom-bullet custom-bullet--prev z-100"></button>
                                    <button class="custom-bullet custom-bullet--next z-100"></button>
                                    
                                </div>
                                <button class="absolute right-2 top-2 z-20">
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/favorite.svg">
                                </button>
                                    
                            </div>
                            <div class="flex flex-col gap-1 pt-3">
                                <div class="flex gap-2">
                                    <p class="font-base font-extrabold">Набор белого хлопка «Сливочные облака», 10 шт </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                                </div>
                                <p>Описание: хлопок, высота 40см, 10шт</p>
                                <p>Артикул: 6666666</p>

                                <p class="pt-5">Цвет</p>
                                <div class="inputs-wrapper flex gap-2 py-4">
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                </div>
                            </div>


                                
                                <div class="flex gap-2 justify-between items-center flex-wrap">
                                    <div class="flex gap-1 pt-3">
                                        <span class="font-extrabold">666р /</span>  шт
                                    </div> 
                                    
                                    <div class="flex gap-2 justify-center items-center order-1 md:-order-1">
                                        <div class="border border-gray rounded-md py-3 px-5">
                                            <button class="font-extrabold pr-2">
                                                -
                                            </button>
                                            1
                                            <button class="font-extrabold pl-2">
                                                +
                                            </button>
                                            
                                        </div>
                                        
                                        <button class="bg-red p-3 rounded-md">
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/cart__white.svg">
                                        </button>
                                    </div>
                                </div>
                        </div> 
                        <div class="swiper-slide w-auto rounded-md overflow-hidden">
                            <div class="relative new__card flex flex-col justify-between">
                                <div class="slider-container__inner__inner">
                                    <div class="slider overflow-hidden w-auto">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_1.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_2.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_3.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_4.png">
                                    </div>
                                    
                                    <button class="custom-bullet custom-bullet--prev z-100"></button>
                                    <button class="custom-bullet custom-bullet--next z-100"></button>
                                    
                                </div>
                                <button class="absolute right-2 top-2 z-20">
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/favorite.svg">
                                </button>
                                    
                            </div>
                            <div class="flex flex-col gap-1 pt-3">
                                <div class="flex gap-2">
                                    <p class="font-base font-extrabold">Набор белого хлопка «Сливочные облака», 10 шт </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                                </div>
                                <p>Описание: хлопок, высота 40см, 10шт</p>
                                <p>Артикул: 6666666</p>

                                <p class="pt-5">Цвет</p>
                                <div class="inputs-wrapper flex gap-2 py-4">
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                </div>
                            </div>


                                
                                <div class="flex gap-2 justify-between items-center flex-wrap">
                                    <div class="flex gap-1 pt-3">
                                        <span class="font-extrabold">666р /</span>  шт
                                    </div> 
                                    
                                    <div class="flex gap-2 justify-center items-center order-1 md:-order-1">
                                        <div class="border border-gray rounded-md py-3 px-5">
                                            <button class="font-extrabold pr-2">
                                                -
                                            </button>
                                            1
                                            <button class="font-extrabold pl-2">
                                                +
                                            </button>
                                            
                                        </div>
                                        
                                        <button class="bg-red p-3 rounded-md">
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/cart__white.svg">
                                        </button>
                                    </div>
                                </div>
                        </div> 
                        <div class="swiper-slide w-auto rounded-md overflow-hidden">
                            <div class="relative new__card flex flex-col justify-between">
                                <div class="slider-container__inner__inner">
                                    <div class="slider overflow-hidden w-auto">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_1.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_2.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_3.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_4.png">
                                    </div>
                                    
                                    <button class="custom-bullet custom-bullet--prev z-100"></button>
                                    <button class="custom-bullet custom-bullet--next z-100"></button>
                                    
                                </div>
                                <button class="absolute right-2 top-2 z-20">
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/favorite.svg">
                                </button>
                                    
                            </div>
                            <div class="flex flex-col gap-1 pt-3">
                                <div class="flex gap-2">
                                    <p class="font-base font-extrabold">Набор белого хлопка «Сливочные облака», 10 шт </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                                </div>
                                <p>Описание: хлопок, высота 40см, 10шт</p>
                                <p>Артикул: 6666666</p>

                                <p class="pt-5">Цвет</p>
                                <div class="inputs-wrapper flex gap-2 py-4">
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                </div>
                            </div>


                                
                                <div class="flex gap-2 justify-between items-center flex-wrap">
                                    <div class="flex gap-1 pt-3">
                                        <span class="font-extrabold">666р /</span>  шт
                                    </div> 
                                    
                                    <div class="flex gap-2 justify-center items-center order-1 md:-order-1">
                                        <div class="border border-gray rounded-md py-3 px-5">
                                            <button class="font-extrabold pr-2">
                                                -
                                            </button>
                                            1
                                            <button class="font-extrabold pl-2">
                                                +
                                            </button>
                                            
                                        </div>
                                        
                                        <button class="bg-red p-3 rounded-md">
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/cart__white.svg">
                                        </button>
                                    </div>
                                </div>
                        </div> 
                        <div class="swiper-slide w-auto rounded-md overflow-hidden">
                            <div class="relative new__card flex flex-col justify-between">
                                <div class="slider-container__inner__inner">
                                    <div class="slider overflow-hidden w-auto">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_1.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_2.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_3.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_4.png">
                                    </div>
                                    
                                    <button class="custom-bullet custom-bullet--prev z-100"></button>
                                    <button class="custom-bullet custom-bullet--next z-100"></button>
                                    
                                </div>
                                <button class="absolute right-2 top-2 z-20">
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/favorite.svg">
                                </button>
                                    
                            </div>
                            <div class="flex flex-col gap-1 pt-3">
                                <div class="flex gap-2">
                                    <p class="font-base font-extrabold">Набор белого хлопка «Сливочные облака», 10 шт </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                                </div>
                                <p>Описание: хлопок, высота 40см, 10шт</p>
                                <p>Артикул: 6666666</p>

                                <p class="pt-5">Цвет</p>
                                <div class="inputs-wrapper flex gap-2 py-4">
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                </div>
                            </div>


                                
                                <div class="flex gap-2 justify-between items-center flex-wrap">
                                    <div class="flex gap-1 pt-3">
                                        <span class="font-extrabold">666р /</span>  шт
                                    </div> 
                                    
                                    <div class="flex gap-2 justify-center items-center order-1 md:-order-1">
                                        <div class="border border-gray rounded-md py-3 px-5">
                                            <button class="font-extrabold pr-2">
                                                -
                                            </button>
                                            1
                                            <button class="font-extrabold pl-2">
                                                +
                                            </button>
                                            
                                        </div>
                                        
                                        <button class="bg-red p-3 rounded-md">
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/cart__white.svg">
                                        </button>
                                    </div>
                                </div>
                        </div> 
                        <div class="swiper-slide w-auto rounded-md overflow-hidden">
                            <div class="relative new__card flex flex-col justify-between">
                                <div class="slider-container__inner__inner">
                                    <div class="slider overflow-hidden w-auto">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_1.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_2.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_3.png">
                                        <img class="rounded-md" style="width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/new/new_4.png">
                                    </div>
                                    
                                    <button class="custom-bullet custom-bullet--prev z-100"></button>
                                    <button class="custom-bullet custom-bullet--next z-100"></button>
                                    
                                </div>
                                <button class="absolute right-2 top-2 z-20">
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/favorite.svg">
                                </button>
                                    
                            </div>
                            <div class="flex flex-col gap-1 pt-3">
                                <div class="flex gap-2">
                                    <p class="font-base font-extrabold">Набор белого хлопка «Сливочные облака», 10 шт </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/arrow.svg" alt="">
                                </div>
                                <p>Описание: хлопок, высота 40см, 10шт</p>
                                <p>Артикул: 6666666</p>

                                <p class="pt-5">Цвет</p>
                                <div class="inputs-wrapper flex gap-2 py-4">
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                    <label class="" style="background-color: url('/src/img/main/thumb.png')"><img src="<?php echo get_template_directory_uri(); ?>/src/img/main/thumb.png"></label>
                                </div>
                            </div>


                                
                                <div class="flex gap-2 justify-between items-center flex-wrap">
                                    <div class="flex gap-1 pt-3">
                                        <span class="font-extrabold">666р /</span>  шт
                                    </div> 
                                    
                                    <div class="flex gap-2 justify-center items-center order-1 md:-order-1">
                                        <div class="border border-gray rounded-md py-3 px-5">
                                            <button class="font-extrabold pr-2">
                                                -
                                            </button>
                                            1
                                            <button class="font-extrabold pl-2">
                                                +
                                            </button>
                                            
                                        </div>
                                        
                                        <button class="bg-red p-3 rounded-md">
                                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/cart__white.svg">
                                        </button>
                                    </div>
                                </div>
                        </div> 
                    </div>
                </div>
            </div>
    </section> 

    <!-- Скидочная система -->
    <section class="section__sale py-10" data-scroll>
        <div class="container">
            <div class="flex justify-between items-center flex-wrap">
                <h2 class="vera__title text-3xl md:text-6xl py-5 font-normal wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">Скидочная система</h2>
                <div class="text-black">
                    В нашем магазине действуют разовые <br> скидки для наших покупателей 
                </div>
            </div>
            <div class="sale__container gap-6 pt-5">
                <div class="bg-red relative rounded-md overflow-hidden p-5 md:p-10 transform hover:scale-105 transition-all min-h-[250px]">
                    <p class="text-white text-2xl"> При заказе <br>
                        <span class="font-extrabold text-white">от 10 000р</span></p>
                    <p class="absolute -bottom-10 right-2 text-white text-[170px] sm:text-[140px] md:text-[170px] text-vera"> -5%</p>
                </div>
                <div class="bg-pink relative rounded-md overflow-hidden p-5 md:p-10 transform hover:scale-105 transition-all min-h-[250px]">
                    <p class="text-white text-2xl"> При заказе <br>
                        <span class="font-extrabold text-white">от 20 000р</span></p>
                    <p class="absolute -bottom-10 right-2 text-white text-[170px] sm:text-[140px] md:text-[170px] text-vera"> -7%</p>
                </div>
                <div class="bg-red relative rounded-md overflow-hidden p-5 md:p-10 transform hover:scale-105 transition-all min-h-[250px]">
                    <p class="text-white text-2xl"> При заказе <br>
                        <span class="font-extrabold text-white">от 50 000р</span></p>
                    <p class="absolute -bottom-10 right-2 text-white text-[170px] sm:text-[140px] md:text-[170px] text-vera"> -10%</p>
                </div>

                <div class="bg-pink relative rounded-md overflow-hidden p-5 md:p-10 transform hover:scale-105 transition-all min-h-[250px]">
                    <p class="text-white text-2xl"> При заказе <br>
                        <span class="font-extrabold text-white">от 100 000р</span></p>
                    <p class="absolute -bottom-10 right-2 text-white text-[170px] sm:text-[140px] md:text-[170px] text-vera"> -20%</p>
                </div>

                <div class="hidden md:block relative rounded-md overflow-hidden transform hover:scale-105 transition-all sale__container--last min-h-[250px]">
                    <img class="h-full object-cover overflow-hidden transform sale__container--last" src="<?php echo get_template_directory_uri(); ?>/src/img/main/sale_2.png" alt="">
                </div>
                <div class="hidden md:block relative rounded-md overflow-hidden transform hover:scale-105 transition-all sale__container--last min-h-[250px]">
                    <img class="h-full object-cover overflow-hidden transform sale__container--last" src="<?php echo get_template_directory_uri(); ?>/src/img/main/sale_1.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Карта -->
    <section class="section__map" data-scroll>
        <div class="container">
            <h2 class="vera__title text-3xl md:text-6xl py-5 font-normal wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">Контакты</h2>

            <div class="flex justify-between flex-wrap">
                <ul class="flex gap-5 md:gap-10 flex-wrap flex-col md:flex-row pb-2">
                    <li class="flex gap-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/geo.svg" class="text-base" >
                        <article class="text-wrap md:text-nowrap font-normal">Приморской край, г. Владивосток, ул. Южно-Уральская, д. 30, кв. 4</article> 
                    </li>
                    <li class="flex gap-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/phonw.svg">
                        <a href="tel:+74232692080" class="text-base font-bold" style="text-wrap: nowrap;">+7 (423) 269-20-80</a> 
                    </li>
                    <li class="flex gap-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/email.svg">
                        <a href="mailto:vlad-dekor@mail.ru" class="text-base font-bold" style="text-wrap: nowrap;">vlad-dekor@mail.ru</a> 
                    </li>
                </ul>
                <ul class="flex gap-3 flex-wrap pt-5 md:pt-0">
                    <a class="flex gap-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/inst.svg">
                    </a>
                    <a class="flex gap-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/vk.svg">
                    </a>
                    <a class="flex gap-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/tg.svg">
                    </a>
                </ul>
            </div>

            <div class="pt-6 w-full">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A08bc1798502b4811c8a1ad7bd4198aa93331ffc66d0f202e70a7bcfce6d642db&amp;width=1440&amp;height=590&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
                
                
            </div>
    </section> 
</main>





<?php get_footer(); ?>