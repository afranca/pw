<?php include('classes/Atributo.class.php'); ?>

<?php

	$entity = New Atributo();

?>

<html>
<?php include('head.php'); ?>

<script>
	function confirmForm(){
		var form1 = document.getElementById('form1');


		var atributo = document.getElementById('atributo');
		if (atributo.value==''){
			alert("atributo es campo obligatorio");
			return;
		}

		var valor = document.getElementById('valor');
		if (valor.value==''){
			alert("valor es campo obligatorio");
			return;
		}

		form1.submit();

	}
</script>

<body>

		<div class="page">

			<div class="main">

				<div class="menu">

					<h1>Nuevo Atributo</h1>

					<br>
					<form name="form1" id="form1" method="post"  action="atributo_save_or_update.php">
						<table width="94%" border="1" align="left">

							<tr>
								<td align="left">Atributo</td>
								<td align="left">
									<input type="text" name="atributo" id="atributo" value="<?php echo($entity->atributo); ?>">
								</td>
							</tr>

							<tr>
								<td align="left">Valor</td>
								<td align="left">
									<input type="text" name="valor" id="valor" value="<?php echo($entity->valor); ?>">
								</td>
							</tr>

							<tr>
								<td align="left">

								</td>
								<td align="left">
									<input type="button" id="cancel_btn" value="Cancelar"> | <input type="button"  onclick="javascript:confirmForm();" id="create_btn" value="Crear">
								</td>
							</tr>
						</table>

					</form>

				</div>



			</div>
		</div>

</body>
</html>