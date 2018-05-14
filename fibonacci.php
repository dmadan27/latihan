<?php
	/**
	*
	*/
	function fibonacci($number){
		if((!is_numeric($number)) || ($number < 0)) return "Inputan harus berupa Angka Positif";
		else{
			$fibo = array();
			for($i=0; $i<$number; $i++){
				if($i <= 1) $fibo[] = $i;
				else $fibo[] = $fibo[$i-1]+$fibo[$i-2];
			}

			return $fibo;
		}
	}

	echo "<pre>";
	print_r(fibonacci(13));