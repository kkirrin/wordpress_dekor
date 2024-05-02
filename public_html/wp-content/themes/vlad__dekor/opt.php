<?php 
    /*
    Template Name: Оптовый отдел
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
                        <span class="font-semibold text-bg-black">Оптовый отдел связи</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section__opt pt-20 md:pt-5">
        <div class="container">
            <h2 class="vera__title text-3xl md:text-4xl py-5 font-semibold">Оптовый отдел срезки</h2>

            <div class="w-auto">
                <img class="image__opt__parallax hidden sm:block md:block rounded-lg" src="<?php echo get_template_directory_uri(); ?>./src/img/main/opt.png" alt="" style="width: -webkit-fill-available;">
                <img class="rounded-lg block sm:hidden md:hidden" src="<?php echo get_template_directory_uri(); ?>./src/img/main/opt__mobile.png" alt="" style="width: -webkit-fill-available;">
            </div>
           

            <div class="px-5 md:px-10 pt-5 pb-10 mt-10" style="max-width: 800px;">
                <?php echo the_content(); ?>
            </div>

        </div>
    </section>


    </main>

<?php get_footer(); ?>