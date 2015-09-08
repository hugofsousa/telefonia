function add_value(value, id_input, id_input2){
	var valor_atual = document.getElementById(id_input).value;
	document.getElementById(id_input).value = valor_atual + value;	
	document.getElementById(id_input2).innerHTML = valor_atual + value;	
}

function erase(id_input, id_input2){
	var input = document.getElementById(id_input);
	var input2 = document.getElementById(id_input2);
	var valor_atual = input.value;
	var new_value = valor_atual.substring(0,(valor_atual.length - 1));
	input.value = new_value;
	input2.innerHTML = new_value;
}

function send_form(id_form){
	document.getElementById(id_form).submit();
}