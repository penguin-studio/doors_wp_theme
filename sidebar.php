<?php
/**
 * User: Максим Руденко
 * Date: 10.03.2016
 * Сайдбар магазина
 */
?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<?php endif; ?>
<?php if ( is_active_sidebar( 'shop_sidebar' ) ) :

    dynamic_sidebar( 'shop_sidebar' );

endif; ?>
<style>
.topnav {
font-family: "CenturyGothicRegular","Century Gothic",Arial,Helvetica,sans-serif;
padding: 40px 28px 25px 0;
width: 213px;
}
ul.topnav {
font-size: 1em;
line-height: 0.5em;
list-style: none outside none;
margin: 0;
padding: 0;
}
ul.topnav li {
}
ul.topnav li a {
color: #000;
display: block;
font-size: 11px;
font-weight: bolder;
line-height: 10px;
padding: 10px 5px;
text-decoration: none;
background: #f2f2f2;
border-bottom: 1px solid #D3D3D3;
}
ul.topnav li a:hover {
background-color: #7D7D7D;
color: white;
}
ul.topnav ul {
display: none;
margin: 0;
padding: 0;
}
ul.topnav ul li {
clear: both;
margin: 0;
padding: 0;
}
ul.topnav ul li a {
font-size: 10px;
font-weight: normal;
outline: 0 none;
padding-left: 20px;
}
ul.topnav ul li a:hover {
background-color: #DCDCDC;
color: #555;
}
ul.topnav ul ul li a {
color: silver;
padding-left: 40px;
}
ul.topnav ul ul li a:hover {
background-color: #D7D7D7;
color: #555555;
}
ul.topnav span {
float: right;
}
</style>
<aside class="left-sidebar">
			<div class="left-sidebar__menu">
                <?php penguin_woocommerce_cat_tree_view(); ?>
                
			</div>
			<div class="filter">
                <form method="get">
                    <p>Цена</p>
                    <div class="price-loop-wrapp">
                        <label>от<input type="text" name="filter_price_from" value="<?php echo esc_attr( isset($_GET['filter_price_from'])?$_GET['filter_price_from']:0 ); ?>"></label>
                        <label>до<input type="text" name="filter_price_to" value="<?php echo esc_attr( isset($_GET['filter_price_to'])?$_GET['filter_price_to']:0 ); ?>"></label>
                    </div>
                    <!--
                    <select class="choice-drop">
                        <option>Производитель</option>
                        <option></option>
                        <option></option>
                    </select>
                    -->
                    <input type="submit" value="Отфильтровать">
                </form>


            </div>
		</aside>