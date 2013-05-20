
function phone_mask(key_in_value){
	var phone = '';
	phone = phone + key_in_value;
	if (phone.length == 3 || phone.length == 6 || phone.length == 9){
		phone = phone + ' ';
		document.getElementById("phone").value = phone;
	}

	if (phone.length > 12){
		document.getElementById("phone").value = phone.substring(0,12);
	}
}


function time_mask(key_in_time){
	var time = '';
	time = time + key_in_time;
	if (time.length == 2){
		time = time + ':';
		document.getElementById("toa").value = time;
	}
	if (time.length >= 5){
		document.getElementById("toa").value = time.substring(0,5);
	}
}

function toUp(el){
	el.value = el.value.toUpperCase();
}

function isNumber(n) {
  return !isNaN(parseInt(n)) && isFinite(n);
}

function isBetweenRange(low,high,numb) {
	var numb_int = parseInt(numb);

	if (numb_int >= low && numb_int <= high)
		return true;

	return false;

}

function checkMinLength(str,minLength){
	if (str.length < minLength){
		return false;
	}
	return true;
}

function checkIfStringContainsNumber(str){

	var reg = /\d+/;   // regular Expression to find one or more digits

	if ( str.match(reg)!= null){
		return true;  // that means numbers were found
	}
	return false;  // no numbers found
}


function validateFieldNotBlank(fieldId){

	var errorMessage = document.getElementById("error_message");
 	var field = document.getElementById(fieldId);
 	var fieldValue = field.value;
 	var fieldName  = field.name;

 	if (field == null || fieldValue == null || fieldValue == "") {
		if (fieldId!='region'){
	  		errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font>no puede estar en blanco";
		} else {
			errorMessage.innerHTML = "Selecione una <font color='red'>Provincia</font>";
		}
	  	field.focus();
	  	return false;
  	}

	if (fieldId == 'name'){
		if ( !checkMinLength(fieldValue,2) ){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> minimo de 2 letras";
		  	field.focus();
			return false;
		}
		if (checkIfStringContainsNumber(fieldValue)){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> no puede tener numeros";
		  	field.focus();
			return false;
		}
	}

	if ( fieldId == 'surname'){
		if ( !checkMinLength(fieldValue,2) ){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> minimo de 2 letras";
		  	field.focus();
			return false;
		}
		if (checkIfStringContainsNumber(fieldValue)){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> no puede tener numeros";
		  	field.focus();
			return false;
		}
	}

	if (fieldId == 'age'){
		if (!isNumber(fieldValue)){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> debe ser numerico";
		  	field.focus();
			return false;
		}
		if (!isBetweenRange(18,105,fieldValue)){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> debe estar entre 18 y 105";
		  	field.focus();
			return false;
		}
	}

	if (fieldId == 'nif'){
		if (!checkNifFirstCharacter(fieldValue)){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> no es valido";
		  	field.focus();
			return false;
		}

	}
	if (fieldId == 'email'){

		var regEx =/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
		if(!regEx.test(fieldValue)){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> no es valido";
		  	field.focus();
			return false;
		}

	}
	if (fieldId == 'city'){
		if ( !checkMinLength(fieldValue,2) ){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> minimo de 2 letras";
		  	field.focus();
			return false;
		}
		if (checkIfStringContainsNumber(fieldValue)){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> no puede tener numeros";
		  	field.focus();
			return false;
		}
	}

	if (fieldId == 'dob'){
		var validformat=/^\d{2}\/\d{2}\/\d{4}$/; //Basic check for format validity

		if (!validformat.test(fieldValue)){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> debe estar en el formato <font color='red'>dd/mm/aaaa</font> ";
		  	field.focus();
			return false;
		}

		//brakes down date into day, month and year
		var dateArr = fieldValue.split("/");
		var day   = dateArr[0];
		var month = dateArr[1];
		var year  = dateArr[2];

		// create object date and compare it with the real values
		var jsDateObject = new Date(year, month-1, day);
		if ((jsDateObject.getMonth()+1!=month)||(jsDateObject.getDate()!=day)||(jsDateObject.getFullYear()!=year)){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> contiene valores invalidos.";
			field.focus();
			return false;
		}
	}

	if (fieldId == 'phone'){

		if (fieldValue.length !=12){

			if (fieldValue.length < 12)
				errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> faltan numeros ";
			else
				errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> contiene muchos numeros";

			field.focus();
			return false;
		}

		var phoneNumbers = fieldValue.split(" ");
		if (phoneNumbers.length !=4){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> contiene formato invalido.";
			field.focus();
			return false;
		}


		for (var i=0;i<phoneNumbers.length-1;i++){
			if (!isNumber(phoneNumbers[i])){
				errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> contiene valores invalidos:<font color='red'>"+phoneNumbers[i]+"</font>.";
				field.focus();
				return false;
			}
			if (i==0){
				if (phoneNumbers[i].length != 3){
					errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> contiene formato invalido.";
					field.focus();
					return false;
				}
			} else {
				if (phoneNumbers[i].length != 2){
					errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> contiene formato invalido.";
					field.focus();
					return false;
				}
			}
		}
	}

	if (fieldId == 'doa'){
		var validformat=/^\d{2}\/\d{2}\/\d{4}$/; //Basic check for format validity

		if (!validformat.test(fieldValue)){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> debe estar en el formato <font color='red'>dd/mm/aaaa</font> ";
		  	field.focus();
			return false;
		}

		//brakes down date into day, month and year
		var dateArr = fieldValue.split("/");
		var day   = dateArr[0];
		var month = dateArr[1];
		var year  = dateArr[2];

		// create object date and compare it with the real values
		var jsDateObject = new Date(year, month-1, day);
		if ((jsDateObject.getMonth()+1!=month)||(jsDateObject.getDate()!=day)||(jsDateObject.getFullYear()!=year)){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> contiene valores invalidos.";
			field.focus();
			return false;
		}
	}

	if (fieldId == 'toa'){

		// tests length of the time  for the hh:mm format
		if (fieldValue.length < 5 ){
			errorMessage.innerHTML = "Para el campo <font color='red'>"+fieldName+" </font> use el formato <font color='red'>hh:mm </font>.";
			field.focus();
			return false;
		}


		//brakes down date into array of hours and mins
		var timeArr = fieldValue.split(":");
		var hrs = timeArr[0];
		var min = timeArr[1];

		if (hrs==null && min==null ){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> contiene valores nulos.";
			field.focus();
			return false;
		}

		if (!isNumber(hrs) || !isNumber(min) ){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> contiene valores invalidos, use el formato <font color='red'>hh:mm </font>.";
			field.focus();
			return false;
		}

		if ((hrs < 00 ) || (hrs > 23) || ( min < 00) ||( min > 59)){
			errorMessage.innerHTML = "El campo <font color='red'>"+fieldName+" </font> contiene valores invalidos.";
			field.focus();
			return false;
		}

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

	for (i=0;i < fields.length-1;i++){
		if ( !validateFieldNotBlank(fields[i]) ){
			return;
		}
	}

	incrementCookie();
	/*
	var cookieValue = getCookieValue("pw_cookie");
	var cookieValueInt = parseInt(cookieValue);
	cookieValueInt++;
	setCookieValue(cookieValueInt);




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
	*/


	var form1 =  document.getElementById('form1');
	form1.action = 'index03.html';
	form1.submit();



}

function incrementCookie(){
	var cookieValue = getCookieValue("pw_cookie");
	var cookieValueInt = parseInt(cookieValue);
	cookieValue++;
	setCookieValue(cookieValue);
}


function setCookieValue(value){
	//alert("document.cookie:"+document.cookie);
	document.cookie="pw_cookie=" + value;
	//alert("document.cookie:"+document.cookie);
}


function getCookieValue(key){
    var kookie = document.cookie;

    //alert("document.cookie:"+kookie);

	if (kookie.length > 0) {
		var cookieArr = kookie.split(";");
		//alert("cookieArr[0]:"+cookieArr[0]);
		//alert("isNaN(cookieArr[0]:"+isNaN(cookieArr[0]));
		if (cookieArr[0] != null && cookieArr[0]!= "" ){
			//alert("cookieArr[0]:"+cookieArr[0]);
			var cookiePairValueArr = cookieArr[0].split("=");
			//alert("cookiePairValueArr:"+cookiePairValueArr);
			if (cookiePairValueArr!=null){
				var cookieName  = cookiePairValueArr[0];
				var cookieValue = cookiePairValueArr[1];
				//alert("cookieValue="+cookieValue);
				if (cookieValue != null) {
					//alert(cookieName+"="+cookieValue);
					return cookieValue;
    			}
			}
		}
	}

    return "0";
}

function checkNifFirstCharacter(fullValue){
	var fchar = fullValue.substring(0,1);

	var validDigits = ["0","1","2","3","4","5","6","7","8","9","K","L","M","X","Y","Z"];

	for (var a =0; a < validDigits.length; a++){
		if (fchar == validDigits[a])
			return true;
	}
	return false;
}


