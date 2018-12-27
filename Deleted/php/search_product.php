<?php
	$search_products = $_GET["search_words"];
	$search_products = strtolower($search_products);
	$search_products_array = explode(" ",$search_products);
	$suppliments_ascci_value = 1220;
	for($i=0 ; $i<sizeof($search_products_array) ; $i++)
		{
			$x = str_split($search_products_array[$i]);
			$sum = 0;
			for($j=0 ; $j<sizeof($x) ; $j++)
			{
				$sum += ord($x[$j]);
			}
			$diff = 1220 - $sum;
			if($diff<0)
				{
					$diff = -$diff;
				}
			if($diff>=0 && $diff<=50)
				{
					echo "finded";
					break;
				}
		}
?>