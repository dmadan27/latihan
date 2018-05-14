<?php
	/**
	*
	*/
	function faktorial($number){
		if((!is_numeric($number)) || ($number < 0)) return "Inputan harus berupa Angka Positif";
		else{
			$fac = 1;
			for($i=0; $i<$number; $i++){
				if($number > 1) $fac *= ($i+1);
			}

			return $fac;
		}
	}

	echo faktorial(6);