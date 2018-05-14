<?php
	require_once "../sorting/bubble_sort.php";

	/**
	*
	*/
	function binary_search($data, $search=""){
		// urutkan data terlebih dahulu
		$data = bubble_sort($data);

		$cek = false;
		$la = 0;
		$lb = count($data)-1;

		while(!$cek && $la <= $lb){
			$k = ceil(($la+$lb)/2);
			if($data[$k] == $search) $cek = true;
			else{
				if($data[$k] < $search) $la = $k+1;
				else $lb = $k-1;
			}
		}

		if($cek) return "Data ".$search." Ditemukan pada indeks ke-".$k;
		else return "Data ".$search." Tidak ditemukan";
	}

	$data = array(3, 12, 7, 29, 15);

	echo "<pre>";
	print_r(binary_search($data, 15));
