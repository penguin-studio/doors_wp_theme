<?php get_header();?>
<section class="main-content">
	<div class="container">
	    <h1 class="main-title"><?php the_title(); ?></h1>
	    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        		<?php the_content(); ?>
        	<?php endwhile; endif; ?>
        <?php get_sidebar(); ?>
	</div>
</section>
<?php get_footer(); ?>
