

function toUp(el){
	el.value = el.value.toUpperCase();
}

function ValidarNombre(){
 	var element = document.getElementById("name");
 	var x=element.value;

	if (x==null || x=="") {
	  	document.getElementById("error_message").innerHTML = "El campo nombre no puede estar en blanco";
	  	element.focus();
	  	return false;
	}
	document.getElementById("error_message").innerHTML = "";
	return true;
}

function ValidarApellidos(){
 	var element=document.getElementById("surname");
 	var x=element.value;

	if (x==null || x=="") {
	  	document.getElementById("error_message").innerHTML = "El campo apellidos no puede estar en blanco";
	  	element.focus();
	  	return false;
  	}
  	document.getElementById("error_message").innerHTML = "";
  	return true;
}

function ValidarEdad(){
	var element = document.getElementById("age");
	var x= element.value;
	var x_int = parseInt(x);
	if (isNaN(x_int)){
		document.getElementById("error_message").innerHTML = "El campo edad no es correcta";
		element.focus();
		return false;
	}

	if (x_int<18 || x_int>105){
	  document.getElementById("error_message").innerHTML = "El campo edad tiene que estar entre 18 a 105 años";
	  element.focus();
	  return false;
	}

	document.getElementById("error_message").innerHTML = "";
	return true;
}


function ValidarNIF(){
	var element = document.getElementById("nif");


	document.getElementById("error_message").innerHTML = "";
	return true;
}


function ValidarEmail(){
	var element = document.getElementById("email");


	document.getElementById("error_message").innerHTML = "";
	return true;
}


function validateAndSubmitForm(){
	if (!ValidarNombre()){
		return false;
	}


	if (!ValidarApellidos()){
		return false;
	}

	if (!ValidarEdad()){
		return false;
	}


	if (!ValidarNIF()){
		return false;
	}


	if (!ValidarEmail()){
		return false;
	}

	var form1 =  document.getElementById('form1');
	form1.action = 'result.html';
	form1.submit();


}


