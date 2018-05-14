<?php
	/**
	* Algoritma pencarian sequential tanpa sentinel
	* mencari data dengan menelusuri data satu persatu hingga data yang dicari ditemukan
	*/
	function sequential_search($data, $search){
		$max_array = count($data);
		
		//menggunakan while
		
		$i = 0;
		while(($data[$i] != $search) && ($i < $max_array)){
			$i += 1;
		}

		if($data[$i] == $search) $output = "Data ".$search." Ditemukan pada indeks ke-".$i;
		else $output = "Data ".$search." Tidak ditemukan";

		return $output;

		/**
		* menggunakan for
		
		$temp_i = 0;
		for($i=0; $i<$max_array; $i++){
			$temp_i++;
		}

		if($search == $data[$temp_i]) return "Data ".$search." Ditemukan pada indeks ke-".$i;
		else return "Data ".$search." Tidak ditemukan";

		*/
	}

	/**
	* Algoritma pencarian sequential dengan sentinel
	*/
	function sequential_search_sentinel($data, $search){
		$max_array = count($data);
		$i = 0;
		$data[$max_array+1] = $search;

		while(($data[$i] != $search)){
			$i += 1;
		}

		if($i < $max_array+1) return "Data ".$search." Ditemukan pada indeks ke-".$i;
		else return "Data ".$search." Tidak ditemukan";
	}

	/**
	*
	*/
	function sequential_search_boolean($data, $search){
		$max_array = count($data);
		$i = 0;
		$cek = false;

		while(!$cek && $i < $max_array){
			if($data[$i] == $search) $cek = true;
			else $i++;
		}

		if($cek) return "Data ".$search." Ditemukan pada indeks ke-".$i;
		else return "Data ".$search." Tidak ditemukan";
	}

	$data = array(5, 1, 9, 4, 2);
	var_dump(sequential_search_boolean($data, 1));