<?php
/**
 * User: Максим Руденко
 * Date: 10.03.2016
 * Сайдбар магазина
 */
?>
<aside class="left-sidebar">
			<div class="left-sidebar__menu">
			    <? wp_nav_menu(array('menu' => 'aside-menu', 'sub' => 'aside-menu')); ?>

			</div>
			<div class="filter">
                <form method="post">
                    <p>Цена</p>
                    <div class="price-loop-wrapp">
                        <label>от<input type="text"></label>
                        <label>до<input type="text"></label>
                    </div>
                    <select class="choice-drop">
                        <option>Производитель</option>
                        <option></option>
                        <option></option>
                    </select>

                </form>


            </div>
		</aside>