<?php

function category_products(){
	
	if(is_product_category() || is_product_tag()){
		$queried_object = get_queried_object();
		$content = get_term_meta($queried_object ->term_id,'cat_meta'); // retrieving content under that category_products
		if(!empty($content[0]['cat'])){
			echo '<hr/>';
			echo do_shortcode($content[0]['cat']);
		}
	}
}

?>