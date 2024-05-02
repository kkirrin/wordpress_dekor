<?php 
    /*
    Template Name: Контакты
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
                        <span class="font-semibold text-bg-black">Контакты</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section__map__contacts">
            <div class="container">
                <h2 class="vera__title text-3xl md:text-4xl py-5 font-semibold">Контакты</h2>

                <div class="pt-5 w-full">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A08bc1798502b4811c8a1ad7bd4198aa93331ffc66d0f202e70a7bcfce6d642db&amp;width=1440&amp;height=590&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>

                <h4 class="text-xl font-bold pt-5">Реквизиты</h4>
            <div class="flex flex-col sm:flex-row pt-5 gap-10 flex-wrap">
                <div>
                    <ul>
                        <li class="py-2">Полное Наименование: ИП Приходько Александр Сергеевич</li>
                        <li class="py-2">Юридический адрес: 690048, Приморской край, г. Владивосток, ул. Южно-Уральская, д. 30, кв. 4 </li>
                        <li class="py-2">Почтовый адрес: 690048, Приморский край, г. Владивосток, ул. Южно-Уральская, д. 30, кв. 4 </li>
                        <li class="py-2">ИНН/КПП: 253812803318 </li>
                        <li class="py-2">ОГРНИП: 316253600093600 </li>
                        <li class="py-2">Расчетный счет: 40802810120050000502 </li>
                        <li class="py-2">Корреспондентский счет: 30101810800000000770 </li>
                        <li class="py-2">БИК банка: 040813770 </li>
                        <li class="py-2">Банк: ФИЛИАЛ “ХАБАРОВСКИЙ” АО “АЛЬФА-БАНК” </li>
                        <li class="py-2">Директор: Приходько Александр Сергеевич</li>
                    </ul>
                </div>
                <div>
                    <ul class="text-black text-base">
                        <li class="uppercase font-bold pb-2">
                            Отдел декора:
                        </li>  
                        <li class="flex gap-2 pb-2">
                            <img src="<?php echo get_template_directory_uri() ;?>/src/img/icons/phonw.svg">
                            <a href="tel:+74232692080" class="font-bold">+7 (423) 269-20-80</a> 
                        </li>

                        <li class="flex gap-2 pb-2">
                            <img width='20' src="<?php echo get_template_directory_uri() ;?>/src/img/icons/sap.svg">
                            <a href="tel:+74230016380" class="font-bold">+7 (423) 001-63-80</a> 
                        </li>

                        <li class="font-bold uppercase pt-5 pb-2">
                            Розничный отдел срезки:
                        </li>  
                        <li class="pb-2 flex gap-2">
                            <img src="<?php echo get_template_directory_uri() ;?>/src/img/icons/phonw.svg">
                            <a href="tel:+74232692080" class="font-bold">+7 (423) 269-20-80</a> 
                        </li> 
                        <li class="pb-2 flex gap-2">
                            <img width='20' src="<?php echo get_template_directory_uri() ;?>/src/img/icons/sap.svg">
                            <a href="tel:+79024832080" class="font-bold">+7 (902) 483-20-80</a> 
                        </li> 


                        <li class="uppercase font-bold pt-5 pb-2"">
                            Оптовый отдел срезки:
                        </li>  

                        <li class="flex gap-2 pb-2">
                            <img width='20' src="<?php echo get_template_directory_uri() ;?>/src/img/icons/sap.svg">
                            <a href="tel:+7966276-33-08" class="font-bold">+7 (423) 276-33-08</a> 
                        </li>

                    </ul>
                </div>
                <div>
                    <ul class="text-black text-base">
                        <li class="pb-4 md:pb-8 flex gap-3">
                            <img src="<?php echo get_template_directory_uri() ;?>/src/img/icons/geo.svg">
                            <address class="font-bold">Приморской край, г. Владивосток, <br> ул. Южно-Уральская, д. 30, кв. 4</address> 
                        </li>  
                        <li class="pb-4 md:pb-8 flex gap-3">
                            <img src="<?php echo get_template_directory_uri() ;?>/src/img/icons/email.svg">
                            <a href="mailto:vlad-dekor@mail.ru" class="font-bold">vlad-dekor@mail.ru</a> 
                        </li>  
                    </ul>
                </div>
            </div>

        </div>
    </section>
    </main>

<?php get_footer(); ?>