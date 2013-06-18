
function valida_login()	{
	var form = document.getElementById("Formulario");
	var user = document.getElementById("usuario");
	var passwd = document.getElementById("pass");

	if(usuario.value == "" || pass.value == "" )	{
		alert("Por favor, rellena los datos para ingresar en la página.");
		return ;
	}
	form.submit();
}
