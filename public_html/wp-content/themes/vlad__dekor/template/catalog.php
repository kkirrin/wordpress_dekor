<?php 
    /*
    Template Name: страница шаблон - Каталог 
    */
?>

<?php get_header('second'); ?>

    <main>
        <h1 class="visually-hidden">Скрытый заголовок</h1>
        <section class="pt-20 md:pt-32">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="breadcrumb__list flex items-center justify-start gap-2">
                        <li class="breadcrumb__item text-bg-black opacity-60 ">
                            <a href="/">
                                Главная
                            </a>
                        </li>
                        <li class="opacity-60 text-bg-black">
                            /
                        </li>
                        <li class="breadcrumb__item">
                            <span class="font-semibold text-bg-black">Каталог</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="section__popular__catalog">
            <div class="container">
                <h2 class="vera__title text-2xl md:text-4xl py-10 font-semibold">Все категории</h2>
                <button
                    class="text-bg-black font-bold btn_menu_filter block esm:block sm:block md:hidden">Показать меню
                </button>

                <div class="sidibar__menu">
                    <nav class="catalog__menu">
                        <ul id="sidebar-menu" class="sub-menu">
                            <li class="pl-5 text-gray">1</li>
                            <li class="pl-5 text-gray">1</li>
                            <li class="pl-5 text-gray">2</li>
                            <li class="pl-5 text-gray">3</li>
                            <li class="pl-5 text-gray">4</li>
                        </ul>
                    </nav>
                </div>
                <div class="flex gap-10 relative">



                    <aside class="w-full esm:w-full sm:w-full md:w-1/6 hidden esm:hidden sm:hover: md:block mr-5 h-screen bg-gray-200">
                        <div>
                            <ul class="dropListFilter pb-2">
                                <li class="text-bg-black font-semibold">
                                    Гель лаки
                                    <ul class="hidden ulFilter">
                                        <div class="p-2">Какой-то бренд</div>

                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">2</li>
                                        <li class="pl-5 text-gray">3</li>
                                        <li class="pl-5 text-gray">4</li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="dropListFilter pb-2">
                                <li class="text-bg-black font-semibold">
                                    Гели для моделирования
                                    <ul class="hidden ulFilter">
                                        <div class="p-2">Какой-то бренд</div>
                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">2</li>
                                        <li class="pl-5 text-gray">3</li>
                                        <li class="pl-5 text-gray">4</li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="dropListFilter pb-2">
                                <li class="text-bg-black font-semibold">
                                    Расходные материалы
                                    <ul class="hidden ulFilter">
                                        <div class="p-2">Какой-то бренд</div>
                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">2</li>
                                        <li class="pl-5 text-gray">3</li>
                                        <li class="pl-5 text-gray">4</li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="dropListFilter pb-2">
                                <li class="text-bg-black font-semibold">
                                    Жидкости
                                    <ul class="hidden ulFilter">
                                        <div class="p-2">Какой-то бренд</div>

                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">2</li>
                                        <li class="pl-5 text-gray">3</li>
                                        <li class="pl-5 text-gray">4</li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="dropListFilter pb-2">
                                <li class="text-bg-black font-semibold">
                                    Электроборудование
                                    <ul class="hidden ulFilter">
                                        <div class="p-2">Какой-то бренд</div>

                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">2</li>
                                        <li class="pl-5 text-gray">3</li>
                                        <li class="pl-5 text-gray">4</li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="dropListFilter pb-2">
                                <li class="text-bg-black font-semibold">
                                    Инструменты
                                    <ul class="hidden ulFilter">
                                        <div class="p-2">Какой-то бренд</div>

                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">2</li>
                                        <li class="pl-5 text-gray">3</li>
                                        <li class="pl-5 text-gray">4</li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="dropListFilter pb-2">
                                <li class="text-bg-black font-semibold">
                                    Дизайн
                                    <ul class="hidden ulFilter">
                                        <div class="p-2">Какой-то бренд</div>

                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">2</li>
                                        <li class="pl-5 text-gray">3</li>
                                        <li class="pl-5 text-gray">4</li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="dropListFilter pb-2">
                                <li class="text-bg-black font-semibold">
                                    Депиляция
                                    <ul class="hidden ulFilter">
                                        <div class="p-2">Какой-то бренд</div>

                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">2</li>
                                        <li class="pl-5 text-gray">3</li>
                                        <li class="pl-5 text-gray">4</li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="dropListFilter pb-2">
                                <li class="text-bg-black font-semibold">
                                    Стемпинг
                                    <ul class="hidden ulFilter">
                                        <div class="p-2">Какой-то бренд</div>

                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">2</li>
                                        <li class="pl-5 text-gray">3</li>
                                        <li class="pl-5 text-gray">4</li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="dropListFilter pb-2">
                                <li class="text-bg-black font-semibold">
                                    Распродажа
                                    <ul class="hidden ulFilter">
                                        <div class="p-2">Какой-то бренд</div>

                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">1</li>
                                        <li class="pl-5 text-gray">2</li>
                                        <li class="pl-5 text-gray">3</li>
                                        <li class="pl-5 text-gray">4</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </aside>


                    <div class="flex gap-2 md:gap-10 absolute right-auto left-0 md:left-auto md:right-0 top-0 flex-col md:flex-row">
                        <div>
                            <input type="checkbox" name="">
                            <label for="">В наличии</label>
                        </div>
                        <div>
                            <select name="" aria-placeholder="Сортировка">
                                <option for="">Сортировать по дате</option>
                                <option for="">Сортировать по цене</option>
                            </select>
                        </div> 
                    </div>
                    <div class="grid grid-cols-2 xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2 md:gap-10 pt-10">
                        <div class="popular__card rounded-md overflow-hidden relative z-0">
                            <img class="object-cover" src="./src/img/category/category_1.png" alt="текст">
                            <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                                <p class="text-xs md:font-base font-semibold text-start">Упаковочный материал</p>
                                <img src="<?php echo get_template_directory_uri(); ?>./src/img/icons/arrow.svg" alt="">
                            </div>
                        </div>
                        <div class="popular__card rounded-md overflow-hidden relative z-0">
                            <img class="object-cover" src="./src/img/category/category_2.png" alt="текст">
                            <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                                <p class="text-xs md:font-base font-semibold text-start">Лента</p>
                                <img src="<?php echo get_template_directory_uri(); ?>./src/img/icons/arrow.svg" alt="">
                            </div>
                        </div>
                        <div class="popular__card rounded-md overflow-hidden relative z-0">
                            <img class="object-cover" src="./src/img/category/category_3.png" alt="текст">
                            <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                                <p class="text-xs md:font-base font-semibold text-start">Коробки, кашпо и сумочки</p>
                                <img src="<?php echo get_template_directory_uri(); ?>./src/img/icons/arrow.svg" alt="">
                            </div>
                        </div>
                        <div class="popular__card rounded-md overflow-hidden relative z-0">
                            <img class="object-cover" src="./src/img/category/category_4.png" alt="текст">
                            <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                                <p class="text-xs md:font-base font-semibold text-start">Корзины, плетеные изделия</p>
                                <img src="<?php echo get_template_directory_uri(); ?>./src/img/icons/arrow.svg" alt="">
                            </div>
                        </div>
                        <div class="popular__card rounded-md overflow-hidden relative z-0">
                            <img class="object-cover" src="./src/img/category/category_5.png" alt="текст">
                            <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                                <p class="text-xs md:font-base font-semibold text-start">Октрытки и конверты</p>
                                <img src="<?php echo get_template_directory_uri(); ?>./src/img/icons/arrow.svg" alt="">
                            </div>
                        </div>
                        <div class="popular__card rounded-md overflow-hidden relative z-0">
                            <img class="object-cover" src="./src/img/category/category_6.png" alt="текст">
                            <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                                <p class="text-xs md:font-base font-semibold text-start">Сухоцветы и стабилизация</p>
                                <img src="<?php echo get_template_directory_uri(); ?>./src/img/icons/arrow.svg" alt="">
                            </div>
                        </div>
                        <div class="popular__card rounded-md overflow-hidden relative z-0">
                            <img class="object-cover" src="./src/img/category/category_7.png" alt="текст">
                            <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                                <p class="text-xs md:font-base font-semibold text-start">Расходные материалы</p>
                                <img src="<?php echo get_template_directory_uri(); ?>./src/img/icons/arrow.svg" alt="">
                            </div>
                        </div>
                        <div class="popular__card rounded-md overflow-hidden relative z-0">
                            <img class="object-cover" src="./src/img/category/category_8.png" alt="текст">
                            <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                                <p class="text-xs md:font-base font-semibold text-start">Инструменты</p>
                                <img src="<?php echo get_template_directory_uri(); ?>./src/img/icons/arrow.svg" alt="">
                            </div>
                        </div>
                        <div class="popular__card rounded-md overflow-hidden relative z-0">
                            <img class="object-cover" src="./src/img/category/category_9.png" alt="текст">
                            <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                                <p class="text-xs md:font-base font-semibold text-start">Сувениры</p>
                                <img src="<?php echo get_template_directory_uri(); ?>./src/img/icons/arrow.svg" alt="">
                            </div>
                        </div>
                        <div class="popular__card rounded-md overflow-hidden relative z-0">
                            <img class="object-cover" src="./src/img/category/category_10.png" alt="текст">
                            <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                                <p class="text-xs md:font-base font-semibold text-start">Ящики деревянные</p>
                                <img src="<?php echo get_template_directory_uri(); ?>./src/img/icons/arrow.svg" alt="">
                            </div>
                        </div>
                        <div class="popular__card rounded-md overflow-hidden relative z-0">
                            <img class="object-cover" src="./src/img/category/category_11.png" alt="текст">
                            <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                                <p class="text-xs md:font-base font-semibold text-start">Садовые товары</p>
                                <img src="<?php echo get_template_directory_uri(); ?>./src/img/icons/arrow.svg" alt="">
                            </div>
                        </div>
                        <div class="popular__card rounded-md overflow-hidden relative z-0">
                            <img class="object-cover" src="./src/img/category/category_12.png" alt="текст">
                            <div class="flex justify-center items-center gap-1 p-4 absolute z-10 bottom-0 text-center">
                                <p class="text-xs md:font-base font-semibold text-start">Все категории</p>
                                <img src="<?php echo get_template_directory_uri(); ?>./src/img/icons/arrow.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>