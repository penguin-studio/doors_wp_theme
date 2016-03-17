<?php
/*
Template Name: Шаблон главной страницы
*/
?>
<?php get_header();?>
<?php
            get_template_part('content/slider');
        ?>
         <?php
                    get_template_part('content/advantages');
                ?>
<section class="main-content">

	<div class="container">


         <?php
            get_template_part('content/content-home');
         ?>
	</div>
</section>
<?php get_footer(); ?>
