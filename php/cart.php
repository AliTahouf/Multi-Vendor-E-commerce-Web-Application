<?php

foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = $cart_item['product_id'], $cart_item, $cart_item_key );
				
				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 ) {
					$product_permalink = $_product->is_visible() ? $_product->$cart_item : '', $cart_item, $cart_item_key ;
					?>
?>