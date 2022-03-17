<?php

if(function_exists('get_product_search_form')) {
	        get_product_search_form();
	    } else {
	        get_search_form();
	    }
 	echo '</div>';
 	
 	$content = ob_get_contents();
    ob_end_clean();
    return $content;
	?>