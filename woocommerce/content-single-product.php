<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>
	<div class="content-right-first">
	<?php
		/**
		 * woocommerce_before_single_product_summary hook.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>
	</div>
	<div class="content-right-second">
		<h2 class="main-title main-title__card-item"><?php echo esc_html(get_the_title()); ?></h2>
		<?php
			global $post;
			$door_material     = get_post_meta($post->ID,'door_material', true);
			$door_size         = get_post_meta($post->ID,'door_size', true);
			$door_manufacturer = get_post_meta($post->ID,'door_manufacturer', true);
			$door_color         = get_post_meta($post->ID,'door_color', true);
		?>
		<table class="card-item-description">
			<?php if($door_material != ''):?>
			<tr>
				<td>Материал:</td>
				<td><?php echo esc_html($door_material);?></td>
			</tr>
			<?php endif; ?>
			<?php if($door_size != ''):?>
			<tr>
				<td>Размер:</td>
				<td><?php echo esc_html($door_size);?></td>
			</tr>
			<?php endif; ?>
			<?php if($door_manufacturer != ''):?>
			<tr>
				<td>Производитель:</td>
				<td><?php echo esc_html($door_manufacturer);?></td>
			</tr>
			<?php endif; ?>
			<?php if($door_color != ''):?>
			<tr>
				<td>Цвет:</td>
				<td><?php echo esc_html($door_color);?></td>
			</tr>
			<?php endif; ?>
		</table>
		<p class="card-item-description-text"><?php echo esc_html(get_the_content()); ?></p>

				<div class="price-container">
				<?php
					/**
					 * woocommerce_single_product_summary hook.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 */
					do_action( 'woocommerce_single_product_summary' );
				?>

				</div>
		</div>
			<?php
				/**
				 * woocommerce_after_single_product_summary hook.
				 *
				 * @hooked woocommerce_output_product_data_tabs - 10
				 * @hooked woocommerce_upsell_display - 15
				 * @hooked woocommerce_output_related_products - 20
				 */
				do_action( 'woocommerce_after_single_product_summary' );
			?>
		

			<meta itemprop="url" content="<?php the_permalink(); ?>" />
			



<?php do_action( 'woocommerce_after_single_product' ); ?>