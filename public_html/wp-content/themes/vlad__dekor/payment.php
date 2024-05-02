<?php 
    /*
    Template Name: Оплата и доставка
    */
?>

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
                            <span class="font-semibold text-bg-black">Оплата и доставка</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="pt-20 md:pt-0">
            <div class="container">
                    <h2 class="vera__title text-3xl md:text-4xl py-5 font-semibold block sm:hidden md:hidden" wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">Доставка и оплата</h2>
                <h2 class="vera__title text-4xl py-5 flex gap-2">
                    <img src="<?php echo get_template_directory_uri().'/src/img/main/pay.svg'; ?>" alt="">
                    Оплата
                </h2>
                <p class="font-extrabold">Для вашего удобства доступно несколько способов оплаты: </p> 
                <ul class="list-disc">
                        <li class="pl-5">
                            ⁠оплата по QR-коду 
                        </li>
                        <li class="pl-5">
                            переводом 
                        </li>
                        <li class="pl-5">
                            ⁠наличными в кассу компании 
                        </li>
                        <li class="pl-5">
                            банковской картой по терминалу 
                        </li>
                        <li class="pl-5">
                            ⁠оплата по расчётному счету 
                        </li>
                        <li class="pl-5">
                            оплата по ссылке
                        </li>
                </ul>

                <h2 class="vera__title text-4xl py-10 flex gap-2">
                    <img src="<?php echo get_template_directory_uri().'/src/img/main/order.svg'; ?>" alt="">
                    Доставка
                </h2>

                <p class="font-extrabold">Доставка по городу:</p> 

                - Доставка по городу: 
                <ul class="list-disc pt-5">
                    <li>350₽ - товар до 5кг</li> 
                    <li>400₽ - 5-10кг </li>
                    <li>450₽ - 10-50кг </li>
                    <li>500₽ - от 50кг </li>
                </ul>


                <ul class="list-disc pt-5">
                    <li> - Бесплатная доставка от 10000р (по средам и субботам) </li>
                    <li> - Отгружаем товар после 100% оплаты </li>
                </ul>

                <ul class="list-disc pt-5">
                    <li>350₽ - товар до 5кг</li> 
                    <li>400₽ - 5-10кг </li>
                    <li>450₽ - 10-50кг </li>
                    <li>500₽ - от 50кг </li>
                </ul>
                
                
                
                <p class="font-extrabold">Доставка по России:</p> 
                
                - Доставка до транспортной компании: 

                <ul class="pt-5">
                    <li>350₽ - товар до 5кг </li>
                    <li>400₽ - 5-10кг </li>
                    <li>450₽ - 10-50кг </li>
                    <li>500₽ - от 50кг  </li>
                    <li>(при заказе от 10000₽ бесплатно по средам и субботам) </li>
                </ul>


                - ⁠Отправляем такими транспортными компаниями как: 
                <ul class="pt-5">
                    <li>СДЭК </li>
                    <li>Почта России </li>
                    <li>Энергия </li>
                    <li>Камчатка </li>
                    <li>и т.д. </li>
                    <li>- Стоимость доставки транспортной компанией рассчитывается отдельно (в зависимости от габаритов груза)  </li>
                    <li>- ⁠Отгружаем товар после 100% оплаты </li>
                </ul>
                    

            </div>
        </section>
        

    </main>

<?php get_footer(); ?>