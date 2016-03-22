<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

// Increase loop count
$woocommerce_loop['loop']++;

?>
<?php if($woocommerce_loop['loop']%3 == 1):?>
<div class="content-right__row">
<?php endif; ?>

<?php
	$door_block_class = '';
		if($woocommerce_loop['loop']%3 == 0):
			$door_block_class = 'content-right__item-last';
		endif;
?>
<div class="content-right__item <?php echo esc_attr($door_block_class);?>">
	<?php
	/**
	 * woocommerce_before_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	?>
	<div class="bottom">
		<?php
		/**
		 * woocommerce_shop_loop_item_title hook.
		 *
		 * @hooked woocommerce_template_loop_product_title - 10
		 */
		do_action( 'woocommerce_shop_loop_item_title' );
		?>
		<?php
		global $post;
		$door_size         = get_post_meta($post->ID,'door_size', true);
		?>
			<?php if($door_size != ''):?>
				<p>Размер: <?php echo esc_html($door_size);?></p>
			<?php endif; ?>
		<?php
		/**
		 * woocommerce_after_shop_loop_item_title hook.
		 *
		 * @hooked woocommerce_template_loop_rating - 5
		 * @hooked woocommerce_template_loop_price - 10
		 */
		do_action( 'woocommerce_after_shop_loop_item_title' );
		?>
	</div>
	<div class="bottom-hidden">
		<button class="bottom-hidden-btn btn" type="button">Купить в один клик</button>
		<?php
		/**
		 * woocommerce_after_shop_loop_item hook.
		 *
		 * @hooked woocommerce_template_loop_product_link_close - 5
		 * @hooked woocommerce_template_loop_add_to_cart - 10
		 */
		do_action( 'woocommerce_after_shop_loop_item' );
		?>
		<a class="bottom-hidden-btn bottom-hidden-btn-next btn" href="<?php echo esc_url(get_permalink()); ?>">Подробнее</a>
	</div>
</div>
<?php
	global $woo_loop;
	$woo_loop = $woocommerce_loop['loop'];
?>
<?php if($woocommerce_loop['loop']%3 == 0):?>
</div>
<?php endif; ?>