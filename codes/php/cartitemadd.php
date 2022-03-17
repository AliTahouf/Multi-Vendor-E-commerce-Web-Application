<?php

if(!empty($_POST["quantity"])) {
		$itemArray = array('name'=>["name"], 'quantity'=>$_POST["quantity"], 'price'=>["price"], 'image'=>["image"]);
		if(!empty($_SESSION["cart_item"])) {
			
				foreach($_SESSION["cart_item"] as $k => $v) {
							if(empty($_SESSION["cart_item"][$k]["quantity"])) {
								$_SESSION["cart_item"][$k]["quantity"] = 0;   //adding item
							}
							$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"]; //index of item increases by +1
				}
			
				$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
			
		} else {
			$_SESSION["cart_item"] = $itemArray;
		}
	}
	
	?>