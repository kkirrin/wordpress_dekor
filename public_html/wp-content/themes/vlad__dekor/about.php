<?php 
    /*
    Template Name: О нас
    */
?>
<!-- 
<div class="wp-block-woocommerce-cart alignwide is-loading">
<div class="wp-block-woocommerce-filled-cart-block">
<div class="wp-block-woocommerce-cart-items-block">
<div class="wp-block-woocommerce-cart-line-items-block"></div>
<div class="wp-block-woocommerce-cart-cross-sells-block">
<h2 class="wp-block-heading has-large-font-size">Вас может заинтересовать…</h2>
<div class="wp-block-woocommerce-cart-cross-sells-products-block"></div>
</div>
</div>
<div class="wp-block-woocommerce-cart-totals-block">
<div class="wp-block-woocommerce-cart-order-summary-block">
<div class="wp-block-woocommerce-cart-order-summary-heading-block"></div>
<div class="wp-block-woocommerce-cart-order-summary-coupon-form-block"></div>
<div class="wp-block-woocommerce-cart-order-summary-subtotal-block"></div>
<div class="wp-block-woocommerce-cart-order-summary-fee-block"></div>
<div class="wp-block-woocommerce-cart-order-summary-discount-block"></div>
<div class="wp-block-woocommerce-cart-order-summary-shipping-block"></div>
<div class="wp-block-woocommerce-cart-order-summary-taxes-block"></div>
</div>
<div class="wp-block-woocommerce-cart-express-payment-block"></div>
<div class="wp-block-woocommerce-proceed-to-checkout-block"></div>
<div class="wp-block-woocommerce-cart-accepted-payment-methods-block"></div>
</div>
</div>
<div class="wp-block-woocommerce-empty-cart-block">
<h2 class="wp-block-heading has-text-align-center with-empty-cart-icon wc-block-cart__empty-cart__title">Сейчас ваша корзина пуста!</h2>
<hr class="wp-block-separator has-alpha-channel-opacity is-style-dots"/>
<h2 class="wp-block-heading has-text-align-center">Новинка в магазине</h2>
</div>
</div> -->

<?php get_header('second'); ?>

    <main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>
            <section class="pt-20 md:pt-32 hidden sm:hidden md:block">
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
                                <span class="font-semibold text-bg-black">О компании </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- О нас -->
            <section class="section__about__main pt-20 md:pt-0" data-scroll>
                <div class="container">
                     <h2 class="vera__title text-3xl md:text-4xl py-5 font-semibold block sm:hidden md:hidden wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">О компании</h2>
                    <div class="flex justify-between gap-5 flex-col md:flex-row items-stretch">
                        <div class="rounded-md bg-gray bg-opacity-75 w-full md:w-1/2 flex justify-center">
                            <img class="" src="<?php echo get_template_directory_uri() ;?>/src/img/about/about.png" alt="">
                        </div>
                        <div class="flex items-center justify-center flex-col rounded-md bg-persik w-full md:w-1/2 relative overflow-hidden" style="align-items: stretch;">
                            <div class="flex items-start justify-center flex-col p-5 md:p-20 h-full">
                                <p class="vera__title text-2xl md:text-4xl py-10 font-bold text-start">
                                    ВЛАД-ДЕКОР
                                </p>
                                <p class="text-black pb-5 font-medium">
                                    Компания «Влад-Декор» - крупнейший поставщик срезанных и горшечных цветов, упаковочных материалов, аксессуаров для флористов и дизайнеров в Приморском крае с 2005 года. Если Вы – цветочная мастерская, флорист-дизайнер, фуд-флорист, свадебный салон с широким спектром услуг, нам есть чем Вас заинтересовать. 
                                    
                                </p>
                                <p class="text-black pb-5 font-medium">У нас Вы можете выбрать товар с оптимальным соотношением «цена-качество». </p>
                            </div>
                            <img class="absolute right-0 bottom-0" src="<?php echo get_template_directory_uri() ;?>/src/img/about/pattern_1.svg" alt="">
                            <img class="absolute top-0 left-0" src="<?php echo get_template_directory_uri() ;?>/src/img/about/pattern_2.svg" alt="">
                            <img class="scale-120 absolute top-16 right-10" src="<?php echo get_template_directory_uri() ;?>/src/img/about/pattern_3.svg" alt="">
                            <img class="scale-120 absolute top-16 right-10" src="<?php echo get_template_directory_uri() ;?>/src/img/about/pattern_4.svg" alt="">
                            <img class="ascale-120 absolute top-10 right-20" src="<?php echo get_template_directory_uri() ;?>/src/img/about/pattern_5.svg" alt="">
                        </div>

                    </div>
                </div>
            </section>
            <!-- Почему выбирают нас -->
            <section class="section__about mt-10" data-scroll>
                <div class="container">
                    <h2 class="vera__title text-3xl md:text-4xl py-10 font-semibold wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">Почему выбирают нас?</h2>

                    <div class="why__choose__us">
                        <div class="why__choose__us__item">
                            <div class="pt-3 px-5 pb-5 flex items-start justify-start flex-col">
                                <p class="font-bold text-start">
                                    Огромный ассортимент товаров, включающий в себя более 5000 позиций
                                </p>
                                <p class="font-normal text-start text-bg-gray pt-5">
                                    Каждый месяц мы привозим множество новинок, как сезонных, так и используемых на постоянной основе, и конечно, не отстаем от трендов. 
                                </p>
                            </div>
                        </div>
                        <div class="why__choose__us__item">
                            <div class="pt-3 px-5 pb-5 flex items-start justify-start flex-col">
                                <p class="font-bold text-start">
                                    Быстрая и оперативная сборка заказов 
                                </p>
                                <p class="font-normal text-start text-bg-gray pt-5">
                                    Наши сотрудники сделают всё возможное, чтобы уже в ближайшее время товар был укомплектован и доставлен
                                </p>
                            </div>
                        </div>
                        <div class="why__choose__us__item">
                            <div class="pt-3 px-5 pb-5 flex items-start justify-start flex-col">
                                <p class="font-bold text-start">
                                    Помощь в подборе  
                                </p>
                                <p class="font-normal text-start text-bg-gray pt-5">
                                    Наши сотрудники сделают всё возможное, чтобы уже в ближайшее время товар был укомплектован и доставлен
                                </p>
                            </div>
                        </div>
                        <div class="why__choose__us__item">
                            <div class="pt-3 px-5 pb-5 flex items-start justify-start flex-col">
                                <p class="font-bold text-start">
                                    Только проверенные поставщики 
                                </p>
                                <p class="font-normal text-start text-bg-gray pt-5">
                                    Наши сотрудники сделают всё возможное, чтобы уже в ближайшее время товар был укомплектован и доставлен
                                </p>
                            </div>
                        </div>
                        <div class="why__choose__us__item why__choose__us__item--tall relative overflow-hidden">
                            <div class="pt-3 px-5 pb-5 flex items-start justify-start flex-col">
                                <p class="font-bold text-start">
                                    Приятные цены и система лояльности 
                                </p>
                                <p class="font-normal text-start text-bg-gray pt-5">
                                    Наша компания заинтересована в долгосрочных отношениях с клиентами, поэтому прилагаем все силы для комфортного и взаимовыгодного сотрудничества
                                </p>
                            </div>
                            <img class="absolute -bottom-10 right-0" src="<?php echo get_template_directory_uri(); ?>/src/img/about/pattern_1.svg" alt="">
                        </div>
                    </div>
                </div>
            </section>

    </main>

<?php get_footer(); ?>