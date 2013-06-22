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
				alert("CF es un campo numerico [-1,1]");
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
<body>

		<div class="page">

			<div class="main">

				<div class="menu">

					<h1>Crear Regla</h1>

					<br>
					<form id="form1" name="form1" method="post"  action="regla_save_or_update.php">

						<table width="94%" border="1" align="left">

							<tr>
								<td align="left">Antecedente</td>
								<td align="left">
									<select name="id_antecedente" id="id_antecedente">
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
									<select name="id_atributo" id="id_atributo">
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
									<input type="text" name="cf" id="cf" value="" size="6">
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