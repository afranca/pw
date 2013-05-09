

function validateFields(formField){

	//alert("field.name:"+formField.name+" | field.value:"+formField.value);

	if (formField.name == "age"){
		//alert("AGE:"+formField.value);
		alert(isNumber(formField.value));
		alert(isBetweenRange(18,105,formField.value));
	}


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