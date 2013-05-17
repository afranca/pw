

function toUp(el){
	el.value = el.value.toUpperCase();
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

function checkMinLength(str,minLength){
	if (str.length < minLength){
		return false;
	}
	return true;
}




function validateFieldNotBlank(fieldId){

	var errorMessage = document.getElementById("error_message");
 	var field = document.getElementById(fieldId);
 	var fieldValue = field.value;
 	var fieldName  = field.name;
 	if (field == null || fieldValue == null || fieldValue == "") {
	  	document.getElementById("error_message").innerHTML = "El campo <font color='red'>"+fieldName+" </font>no puede estar en blanco";
	  	field.focus();
	  	return false;
  	}

	if (fieldId == 'name'){
		if ( !checkMinLength(fieldValue,2) ){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> minimo de 2 letras";
		  	field.focus();
			return false;
		}
	}

	if (fieldName == 'surname'){
		alert('Test Name');
	}

	if (fieldName == 'age'){
		alert('Test Name');
	}

	if (fieldName == 'nif'){
		alert('Test Name');
	}


  	document.getElementById("error_message").innerHTML = "";
	return true;
}






function validateAndSubmitForm(){

	var fields = new Array();
	fields[0] = "name";
	fields[1] = "surname";
	fields[2] = "age";
	fields[3] = "nif";
	fields[4] = "email";
	fields[5] = "city";
	fields[6] = "region";
	fields[7] = "dob";
	fields[8] = "phone";
	fields[9] = "doa";
	fields[10] = "toa";

	for (i=0;fields.length;i++){
		if ( !validateFieldNotBlank(fields[i]) ){
			return;
		}
	}



	/*

	if (!validateName()){
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
	*/


}


