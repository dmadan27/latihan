/**
*
*/
function bilangan_genap(){
	var n = document.getElementById('n').value;
	var output = document.getElementById('output');

	output.innerHTML = '';

	if((parseInt(n) < 1) || (parseInt(n) > 20)){
		alert('Jumlah bilangan harus dalam rentang 1 s.d 20');
	}
	else{
		for (var i = 1; i <= n; i++) {
			if(i % 2 == 0){
				output.innerHTML += i+' ';
			}
		}
	}
}

/**
*
*/
function reset(){
	var n = document.getElementById('n');
	var output = document.getElementById('output');

	n.value = '';
	output.innerHTML = '';
}