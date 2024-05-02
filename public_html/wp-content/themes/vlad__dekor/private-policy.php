<?php 
    /*
    Template Name: private-policy
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
                        <span class="font-semibold text-bg-black">Публичный договор</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="section__opt pt-20 md:pt-5">
        <div class="container">
            <h2 class="vera__title text-3xl md:text-4xl py-5 font-semibold">Публичный договор  — оферта о продаже товаров</h2>

            <div>
                <?php echo the_content(); ?>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>