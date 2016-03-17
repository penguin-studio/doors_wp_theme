<?php
/*
Template Name: Шаблон страницы каталога
*/
?>
<?php get_header();?>
<section class="main-content">

	<div class="container">
         <?php
            get_template_part('content/content-catalogue');
         ?>
	</div>
</section>
<?php get_footer(); ?>
