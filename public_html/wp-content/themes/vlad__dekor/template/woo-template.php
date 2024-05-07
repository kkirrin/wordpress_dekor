<?php
/*
Template Name: страница шаблон - WooCommerce
*/
get_header();
?>
<main>
<div class="container" style="padding-top: 200px;">
    <h1 class="title__catalog">
        <?php the_title(); ?>
    </h1>

    <?php the_content(); ?>
</div>
</main>
<?php get_footer(); ?>