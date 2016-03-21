<?php foreach ( $addon['options'] as $i => $option ) :

	$price = $option['price'] > 0 ? '(' . woocommerce_price( $option['price'] ) . ')' : '';

	$current_value = (
			isset( $_POST[ 'addon-' . sanitize_title( $addon['field-name'] ) ] ) &&
			in_array( sanitize_title( $option['label'] ), $_POST[ 'addon-' . sanitize_title( $addon['field-name'] ) ] )
			) ? 1 : 0;
	?>
	<div class="choice-box__row">
		<div class="choice-box__row-radio">
			<div>
				<label>
					<input type="checkbox" class="addon addon-checkbox" name="addon-<?php echo sanitize_title( $addon['field-name'] ); ?>[]" data-price="<?php echo $option['price']; ?>" value="<?php echo sanitize_title( $option['label'] ); ?>" <?php checked( $current_value, 1 ); ?> /> <?php echo wptexturize( $option['label'] . ' ' . $price ); ?>
				</label>
			</div>
		</div>
	</div>
<?php endforeach; ?>