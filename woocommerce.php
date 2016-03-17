<?php
/**
 * User: Максим Руденко
 * Date: 09.03.2016
 *
 */
?>
<?php get_header();?>
<section class="main-content">
    <div class="container">
        <?php get_sidebar(); ?>
        <section class="content-right">
            <?php if(!is_single()):?>
                <h2 class="main-title"><?php woocommerce_page_title(); ?></h2>
            <?php endif; ?>
            <?php woocommerce_content(); ?>
        </section>
    </div>
</section>
<?php get_footer(); ?>
