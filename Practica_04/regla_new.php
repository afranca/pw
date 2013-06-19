<?php 	include('classes/Antecedente.class.php');
		include('classes/Atributo.class.php');
		include('classes/Regla.class.php');
?>

<?php
	$antecedenteEnt = New Antecedente();
	$antecedente_lst = $antecedenteEnt->readAll();

	$atributoEnt = New Atributo();
	$atributo_lst = $atributoEnt->readAll();
?>

<html>
<?php include('head.php'); ?>
<body>

		<div class="page">

			<div class="main">

				<div class="menu">

					<h1>Crear Regla</h1>

					<br>
					<form name="form1" method="post"  action="regla_save_or_update.php">

						<table width="94%" border="1" align="left">

							<tr>
								<td align="left">Antecedente</td>
								<td align="left">
									<select name="id_antecedente" id="id_antecedente">
										<option value="1" SELECTED>Selecione</option>
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
									<input type="button" id="cancel_btn" value="Cancelar" onclick="javascript:location.href='regla_lst.php'"> | <input type="submit" id="create_btn" value="Crear">
								</td>
							</tr>
						</table>


					</form>

				</div>



			</div>
		</div>

</body>
</html>