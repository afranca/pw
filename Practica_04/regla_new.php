<?php 	include('classes/Antecedente.class.php');
		include('classes/Atributo.class.php');
		include('classes/Regla.class.php');
?>

<?php
	$antecedenteEnt = New Antecedente();
	$antecedente_lst = $antecedenteEnt->findAllDistinctAntecedentesId();

	$atributoEnt = New Atributo();
	$atributo_lst = $atributoEnt->readAll();
?>

<html>
<?php include('head.php'); ?>

<script>
	function confirmForm(){
		var form1 = document.getElementById('form1');
		if (confirm('seguro que queres insertar un regla?')){

			var id_antecedente = document.getElementById('id_antecedente');
			if (id_antecedente.value=='' || id_antecedente.value==0){
				alert("Antecedente es campo obligatorio");
				return;
			}

			var id_atributo = document.getElementById('id_atributo');
			if (id_atributo.value=='' || id_atributo.value==0){
				alert("Consecuente es campo obligatorio");
				return;
			}

			var cf = document.getElementById('cf');
			if (cf.value==''){
				alert("CF es campo obligatorio");
				return;
			}


			if (!isNumber(cf.value)){
				alert("CF es un campo numerico [-1,1] ");
				return;
			}
			if (cf.value >1 || cf <-1){
				alert("CF tiene que estar entre -1 y 1");
				return;
			}


			form1.submit();
		}
	}
</script>

<script>
function showAntecedente(str){
	if (str=="") {
	  document.getElementById("txtHint").innerHTML=" AJAX ERROR";
	  return;
	}

	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	}else {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function(){
  		if (xmlhttp.readyState==4 && xmlhttp.status==200){
    		document.getElementById("div_antecedente").innerHTML=xmlhttp.responseText;
    		document.getElementById("id_atributo").disabled =false;
    	}
  	}

	xmlhttp.open("GET","test_ajax.php?q="+str,true);
	xmlhttp.send();
}


function showConsecuente(str){

	if (str=="") {
	  document.getElementById("txtHint").innerHTML=" AJAX ERROR";
	  return;
	}

	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	}else {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function(){
  		if (xmlhttp.readyState==4 && xmlhttp.status==200){
    		document.getElementById("div_consecuente").innerHTML=xmlhttp.responseText;
    		document.getElementById("cf").disabled =false;
    	}
  	}

	xmlhttp.open("GET","consecuente_ajax.php?q="+str,true);
	xmlhttp.send();


}


function setCF(str){

    document.getElementById("div_cf").innerHTML=str;
}
</script>
<body>

		<div class="page">

			<div class="main">

				<div class="menu">

					<h1>Crear Regla</h1>

					<div id="txtHint">
						<table width="94%" border="0" align="left">
							<tr>
								<td>
									<div class="div_reglas_row">
										<div class="div_id">REGLA </div>
										<div class="div_gap"> &nbsp;</div>
										<div class="div_if"> IF </div>
										<div class="div_gap"> &nbsp;</div>
										<div class="div_antecedente" id="div_antecedente"> </div>
										<div class="div_gap"> &nbsp;</div>
										<div class="div_then"> THEN</div>
										<div class="div_gap"> &nbsp;</div>
										<div class="div_consecuente" id="div_consecuente"></div>
										<div class="div_gap"> &nbsp;</div>
										<div class="div_cf" id="div_cf"></div>
									</div>
								</td>
							</tr>
						</table>
					</div>

					<br>
					<form id="form1" name="form1" method="post"  action="regla_save_or_update.php">

						<table width="94%" border="1" align="left">

							<tr>
								<td align="left">Antecedente</td>
								<td align="left">
									<select name="id_antecedente" id="id_antecedente"  onchange="showAntecedente(this.value)">
										<option value="0" SELECTED>Selecione</option>
										<?php
										$a=0;
										while($a<count($antecedente_lst)){
											echo('<option value="'.$antecedente_lst[$a].'"> Antecedente '.$antecedente_lst[$a].' </option>');
											$a = $a + 1;
										}
										?>
									</select>
								</td>
							</tr>

							<tr>
								<td align="left">Consecuente / Valor</td>
								<td align="left">
									<select name="id_atributo" id="id_atributo" onchange="showConsecuente(this.value)" disabled>
										<option value="0" SELECTED>Selecione</option>
										<?php
										$i=0;
										while($i<count($atributo_lst)){
											echo('<option value="'.$atributo_lst[$i].'"> '.$atributo_lst[$i+1].'='.$atributo_lst[$i+2].' </option>');
											$i = $i + 3;
										}
										?>
									</select>
								</td>
							</tr>

							<tr>
								<td align="left">CF</td>
								<td align="left">
									<input type="text" name="cf" id="cf" value="" size="6" onkeyup="javascript:setCF(this.value)"   onblur="javascript:setCF(this.value)" disabled>
								</td>
							</tr>

							<tr>
								<td align="left">
								</td>
								<td align="left">
									<input type="button" id="cancel_btn" value="Cancelar" onclick="javascript:location.href='regla_lst.php'"> | <input type="button" id="create_btn" value="Crear" onclick="javascript:confirmForm();">
								</td>
							</tr>
						</table>


					</form>

				</div>



			</div>

		</div>


</body>
</html>