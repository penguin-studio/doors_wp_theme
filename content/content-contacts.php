<?php get_sidebar(); ?>

<section class="content-right">
    <h1 class="main-title"><?php the_title(); ?></h1>
    <div class="contacts-col-wrapp">
        <div class="contacts-col contacts-col-address">
            <p>Санкт-Петербург,
                проспект  Обуховской
                Обороны  76 лит. А
                офис 102</p>
        </div>
        <div class="contacts-col contacts-col-phone">
            <p>тел.: +7 (812) 923-93-93</p>
            <p>факс:+7 (812) 412-93-88</p>
        </div>
        <div class="contacts-col contacts-col-email">
            <p><a href="mailto:interdver@bk.ru">interdver@bk.ru</a></p>
        </div>
    </div>
    <div class="map">
        <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=d7ACNinqgu212kkBxza_lG61g5bGF2UC&width=900&height=500&lang=ru_UA&sourceType=constructor"></script>
    </div>
    <div class="content-right__text">
        <?php if (have_posts()):
            while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile;
        endif; ?>
    </div>
</section>
