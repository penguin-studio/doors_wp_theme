<nav class="main-nav">
	<div class="container">
		<ul class="main-nav__list">
			<?php wp_nav_menu(array('menu' => 'main_nav', 'menu_class' => 'main_nav')); ?>
		</ul>
	</div>
</nav>
<footer class="footer">
	<div class="container">
		<div class="footer-col-contacts footer-col">
			<h6>Контакты</h6>
			<ul>
				<li>тел.: +7 (812) 923-93-93</li>
				<li>факс : +7 (812) 412-93-88</li>
				<li>email: interdver@bk.ru</li>
			</ul>
		</div>
		<div class="footer-col-address footer-col">
			<h6>Адрес</h6>
			<ul>
				<li>Санкт-Петербург,</li>
				<li>проспект Обуховской Обороны 76 лит.</li>
				<li>А офис 102</li>
			</ul>
		</div>
		<div class="footer-col-form">
			<h6>Задать вопрос</h6>
			<form class="get-question">
				<div class="input-container">
					<input type="text" placeholder="Имя">
					<input type="text" placeholder="Телефон">
				</div>
				<textarea placeholder="Вопрос"></textarea>
				<input class="btn btn-submit" type="submit" value="Отправить">
			</form>
		</div>
	</div>
	<div class="popup-box" id="popup-box-1">
        <div class="close">X</div>
        <div class="top">
            <h2>Товар добавлен в корзину</h2>
            <p>Спасибо за заказ!</p>
        </div>
        <div class="bottom">
            <a class="btn" href="#">Перейти в корзину</a>
            <a class="btn" href="#">Продолжить покупки</a>
        </div>
    </div>
    <div class="popup-box" id="popup-box-2">
    	<div class="close">X</div>
    	<div class="top">
    		<h2>Купить в один клик</h2>
    		<p>Для заказа заполните поля ниже</p>
    	</div>
    	<div class="bottom">
    		<form method="post">
    			<input type="text" class="modal-input" placeholder="Имя">
    			<input type="text" class="modal-input" placeholder="Телефон">
    			<input type="submit" class="btn btn-submit" placeholder="Отправить">
    		</form>
    	</div>
    </div>
</footer>
<?php
$theme_path_uri = get_template_directory_uri();
?>
<script src="<?php echo $theme_path_uri; ?>/js/lib/jquery.min.js"></script>
<script src="<?php echo $theme_path_uri; ?>/js/lib/lightslider.js"></script>
<script src="<?php echo $theme_path_uri; ?>/js/lib/lightgallery.min.js"></script>
<script src="<?php echo $theme_path_uri; ?>/js/common.min.js"></script>
</body>
</html>
