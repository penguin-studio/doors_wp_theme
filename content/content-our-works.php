<?php get_sidebar(); ?>

<section class="content-right content-right-page-works">
<h1 class="main-title"><?php the_title(); ?></h1>
            <div class="content-right__row">
                <a href="#" class="content-right__item">
                    <img src="<?php bloginfo('template_url'); ?>/images/our-work.jpg">
                    <div class="bottom">
                        <h3 class="bottom-title">Анталия ПО белая ваниль (без витража)</h3>
                        <p>Размеры:	2000х800 мм</p>
                        <p class="bottom-price">12 350 руб.</p>
                    </div>
                </a>
                <a href="#" class="content-right__item">
                    <img src="<?php bloginfo('template_url'); ?>/images/our-work.jpg">
                    <div class="bottom">
                        <h3 class="bottom-title">Анталия ПО белая ваниль (без витража)</h3>
                        <p>Размеры:	2000х800 мм</p>
                        <p class="bottom-price">12 350 руб.</p>
                    </div>
                </a>
                <a href="#" class="content-right__item content-right__item-last">
                    <img src="<?php bloginfo('template_url'); ?>/images/our-work.jpg">
                    <div class="bottom">
                        <h3 class="bottom-title">Анталия ПО белая ваниль (без витража)</h3>
                        <p>Размеры:	2000х800 мм</p>
                        <p class="bottom-price">12 350 руб.</p>
                    </div>
                </a>
            </div>
            <div class="content-right__row">
                <a href="#" class="content-right__item">
                    <img src="<?php bloginfo('template_url'); ?>/images/our-work.jpg">
                    <div class="bottom">
                        <h3 class="bottom-title">Анталия ПО белая ваниль (без витража)</h3>
                        <p>Размеры:	2000х800 мм</p>
                        <p class="bottom-price">12 350 руб.</p>
                    </div>
                </a>
                <a href="#" class="content-right__item">
                    <img src="<?php bloginfo('template_url'); ?>/images/our-work.jpg">
                    <div class="bottom">
                        <h3 class="bottom-title">Анталия ПО белая ваниль (без витража)</h3>
                        <p>Размеры:	2000х800 мм</p>
                        <p class="bottom-price">12 350 руб.</p>
                    </div>
                </a>
                <a href="#" class="content-right__item content-right__item-last">
                    <img src="<?php bloginfo('template_url'); ?>/images/our-work.jpg">
                    <div class="bottom">
                        <h3 class="bottom-title">Анталия ПО белая ваниль (без витража)</h3>
                        <p>Размеры:	2000х800 мм</p>
                        <p class="bottom-price">12 350 руб.</p>
                    </div>
                </a>
            </div>
    <div class="content-right__text">
        <?php if (have_posts()):
            while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile;
        endif; ?>
    </div>
</section>
