<?php
	/**
	* Fungsi selection sort dengan menggunakan max sort
	* mengurutkan dengan mencari nilai max, yang kemudian nilai max tersebut di taruh index terakhir
	*/
	function selection_sort_max($data, $sort = 'asc'){
		$max_array = count($data);
		$x = $max_array;
		// maximum sort
		if(strtolower($sort) == 'asc'){
			for($i=0; $i<$max_array; $i++){
				$max = 0;
				for($j=1; $j<$x; $j++){
					if($data[$j] > $data[$max]) $max = $j;
				}
				$temp = $data[$max];
				$data[$max] = $data[$j-1];
				$data[$j-1] = $temp;
				$x-=1;
				print_r($data);
			}
		}
		// minimun sort
		else if(strtolower($sort) == 'desc'){
			for($i=0; $i<$max_array; $i++){
				$max = $max_array-1;
				for($j=($max_array-2); $j>=$i; $j--){
					if($data[$j] > $data[$max]) $max = $j;
				}
				$temp = $data[$max];
				$data[$max] = $data[$j+1];
				$data[$j+1] = $temp;
				print_r($data);
			}
		}
		else die();

		return $data;
	}

	/**
	* 
	*/
	function selection_sort_min($data, $sort = 'asc'){
		$max_array = count($data);
		if(strtolower($sort) == 'asc'){
			for($i=0; $i<$max_array; $i++){
				$min = $i;
				for($j=$i+1; $j<$max_array; $j++){
					if($data[$j] < $data[$min]) $min = $j;
				}
				$temp = $data[$min];
				$data[$min] = $data[$i];
				$data[$i] = $temp;
				print_r($data);
			}
		}
		// minimun sort
		else if(strtolower($sort) == 'desc'){
			for($i=0; $i<$max_array; $i++){
				$min = $max_array-1;
				for($j=($max_array-2); $j>=$i; $j--){
					if($data[$j] > $data[$min]) $min = $j;
				}
				$temp = $data[$min];
				$data[$min] = $data[$j+1];
				$data[$j+1] = $temp;
				print_r($data);
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
	// selection_sort_min($data, 'desc');
	// echo "Urut Descending: <br>";
	// print_r(bubble_sort($data, 'desc'));