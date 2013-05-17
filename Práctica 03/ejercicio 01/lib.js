// JavaScript Document


function Mayuscula()
{
var x=document.getElementById("txtNombre");
x.value=x.value.toUpperCase();
var y=document.getElementById ("txtApellidos");
y.value=y.value.toUpperCase();
}

function ValidarNombre()
{
 var element=document.getElementById("txtNombre");
 var x=element.value;
 
if (x==null || x=="")
  {
  document.getElementById("label").innerHTML = "El campo nombre no puede estar en blanco";
  element.focus();
  return false;
  }
  document.getElementById("label").innerHTML = "";
  return true;
}

function ValidarApellidos()
{
 var element=document.getElementById("txtApellidos");
 var x=element.value;
 
if (x==null || x=="")
  {
  document.getElementById("label").innerHTML = "El campo apellidos no puede estar en blanco";
  element.focus();
  return false;
  }
  document.getElementById("label").innerHTML = "";
  return true;
}

function ValidarEdad()
{
	var element = document.getElementById("txtEdad");
	var x= element.value;
	var x_int = parseInt(x); 
	if (isNaN(x_int))
	{ 
		document.getElementById("label").innerHTML = "El campo edad no es correcta";
		element.focus();
		return false;
	}

	if (x_int<18 || x_int>105)
  	{
	  document.getElementById("label").innerHTML = "El campo edad tiene que estar entre 18 a 105 años";
	  element.focus();
	  return false;
	}
	
	document.getElementById("label").innerHTML = "";
	return true;
}
	

function ValidarNIF()
{
	var element = document.getElementById("txtNIF");
	var x= element.value;
	var x_int = parseInt(x); 
	
	document.getElementById("label").innerHTML = "";
	return true;
}


function ValidarEmail()
{
	var element = document.getElementById("txtEmail");
	var x= element.value;
	
	document.getElementById("label").innerHTML = "";
	return true;
}


function Validar()
{
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
	
	return true;

}


