<?php get_sidebar(); ?>

<section class="content-right">
	<?php
	echo str_replace('woocommerce','',do_shortcode('[recent_products per_page="9"]'));
?>

			<div class="content-right__text"><?php if (have_posts()): while (have_posts()): the_post(); ?>
                                                   		<?php the_content(); ?>
                                                   	<?php endwhile; endif; ?></div>
</section>
