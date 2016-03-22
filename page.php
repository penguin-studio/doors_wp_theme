<?php get_header();?>
<section class="main-content">
	<div class="container">
		<?php get_sidebar(); ?>
		<section class="content-right">
			<?php if(!is_single()):?>
				<h2 class="main-title"><?php the_title(); ?></h2>
			<?php endif; ?>
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post();?>
					<?php the_content(); ?>
			<?php
				endwhile;
			endif;
			?>
		</section>
	</div>
</section>
<?php get_footer(); ?>
