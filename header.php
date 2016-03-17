<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<!-- style start -->
	<?php
		$theme_path_uri = get_template_directory_uri();
	?>
	<link rel="stylesheet" href="<?php echo esc_url($theme_path_uri); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo esc_url($theme_path_uri); ?>/css/lightslider.css">
	<link rel="stylesheet" href="<?php echo esc_url($theme_path_uri); ?>/css/lightgallery.css">

	
	<!-- style end -->
	<?php wp_head(); ?>
</head>
<body>
	<header class="header">
    	<div class="container">
    		<div class="header-items-wrapp">
    			<div class="logo-wrapp">
    				<a href="/"><img src="<?php echo esc_url($theme_path_uri); ?>/images/logo.png" height="74" width="340" alt="logo" title="logo"></a>
    			</div>
    			<div class="cart-wrapp">
    				<a href="#">Корзина</a>
    				<span>корзина пуста</span>
    			</div>
    			<div class="header-center-wrapp">
    				<ul class="contacts-nav">
    					<li class="contacts-nav__address">Санкт-Петербург пр.Обуховской Обороны 76 лит. А оф.102 </li>
    					<li class="contacts-nav__phone">+7 (812) 923-93-93 </li>
    				</ul>
    				<?php get_search_form(); ?>
    			</div>
    		</div>
    	</div>
    </header>
    <nav class="main-nav">
    	<div class="container">
    		<ul class="main-nav__list">
    		    <?php wp_nav_menu(array('menu' => 'main_nav', 'menu_class' => 'main_nav')); ?>
    		</ul>
    	</div>
    </nav>