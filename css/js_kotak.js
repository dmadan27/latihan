/**
*
*/
function showKotak(kotak, btn){
	var id_kotak = document.getElementById(kotak);
	var id_btn = document.getElementById(btn);

	if(id_kotak.classList.contains('active')){
		id_kotak.style.display = 'none';
		id_kotak.classList.remove('active');
		id_btn.innerHTML = 'Tampilkan Kotak';
	}
	else{
		id_kotak.style.display = 'block';
		id_kotak.classList.add('active');	
		id_btn.innerHTML = 'Sembunyikan Kotak';
	}

}