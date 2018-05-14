<?php
	/**
	*
	*/
	function sequence($data){
		$last = count($data)-1;
		
		$temp_last = $data[$last];
		$temp = array();

		for($i=0; $i<count($data); $i++){
			if($i==0) $temp[] = $temp_last;
			else{
				$temp[] = $data[$i-1];
			}
		}
		$data = $temp;
		return $data;
	}

	$data = array(1,2,3,4,5,6);
	echo "<pre>";
	print_r($data);
	print_r($data = sequence($data));
	print_r($data = sequence($data));
	print_r($data = sequence($data));
	print_r($data = sequence($data));
	print_r($data = sequence($data));
	print_r($data = sequence($data));
	print_r($data = sequence($data));
