<?php
	/**
	*
	*/
	function bubble_sort($data, $sort = 'asc'){
		$max_array = count($data);

		if(strtolower($sort) == 'asc'){
			for($i=0; $i<$max_array; $i++){
				for($j=($max_array-1); $j>$i; $j--){
					if($data[$j] < $data[$j-1]){
						$temp = $data[$j];
						$data[$j] = $data[$j-1];
						$data[$j-1] = $temp;
					}
				}
			}
		}
		else if(strtolower($sort) == 'desc'){
			for($i=0; $i<$max_array; $i++){
				for($j=0; $j<($max_array-1); $j++){
					if($data[$j] < $data[$j+1]){
						$temp = $data[$j];
						$data[$j] = $data[$j+1];
						$data[$j+1] = $temp;
					}
				}
			}
		}
		else die();

		return $data;
	}

	// $data = array(6, 3, 9, 1, 5);

	// echo "<pre>";
	// echo "Data Asli: <br>";
	// print_r($data);
	// echo "Urut Ascending: <br>";
	// print_r(bubble_sort($data));
	// echo "Urut Descending: <br>";
	// print_r(bubble_sort($data, 'desc'));