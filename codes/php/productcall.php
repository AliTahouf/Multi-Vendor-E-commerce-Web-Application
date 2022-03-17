<?php

$image_id = $product->get_image_id();
	$image    = wp_get_attachment_image_src( $image_id, 'woocommerce_gallery_thumbnail' );
	if ( $image ) {
		$image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
		$image     = '<img src="' . $image[0] . '" alt="' . $image_alt . '" class="sticky-add-to-cart-img" />';
		echo $image;
	}
	echo '<div class="product-title-small hide-for-small"><strong>' . get_the_title() . '</strong></div>';
	if ( ! $product->is_type( 'variable' ) ) {
		woocommerce_template_single_price();
	}
	
	?>