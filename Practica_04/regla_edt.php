<?php 	include('classes/Antecedente.class.php');
		include('classes/Atributo.class.php');
		include('classes/Regla.class.php');
?>

<?php
	$entity = New Regla();
	$entity = $entity->read($_GET['id']);

	$antecedenteEnt = New Antecedente();
	$antecedente_lst = $antecedenteEnt->findAllDistinctAntecedentesId();

	$atributoEnt = New Atributo();
	$atributo_lst = $atributoEnt->readAll();
?>

<html>
<?php include('head.php'); ?>
<body>

		<div class="page">

			<div class="main">

				<div class="menu">

					<h1>Editar Regla</h1>

					<br>
					<form name="form1" method="post"  action="regla_save_or_update.php">
						<input type="hidden" name="id" id="id" value="<?php echo($entity->id); ?>">
						<table width="94%" border="1" align="left">

							<tr>
								<td align="left">Antecedente</td>
								<td align="left">
									<select name="id_antecedente" id="id_antecedente">
										<option value="0" SELECTED>Selecione</option>
										<?php
										$a=0;
										while($a<count($antecedente_lst)){
											$selected = "";
											if ($antecedente_lst[$a] == $entity->id_antecedente){
												$selected = " SELECTED ";
											}

											echo('<option value="'.$antecedente_lst[$a].'" '.$selected.'> Antecedente '.$antecedente_lst[$a].' </option>');
											$a = $a + 1;
										}
										?>
									</select>

								</td>
							</tr>

							<tr>
								<td align="left">Consecuente</td>
								<td align="left">
									<select name="id_atributo" id="id_atributo">

										<?php
										$i=0;
										while($i<count($atributo_lst)){
											if ($atributo_lst[$i] == $entity->id_atributo){
												echo('<option value="'.$atributo_lst[$i].'" SELECTED> '.$atributo_lst[$i+1].'='.$atributo_lst[$i+2].'</option>');
											} else {
												echo('<option value="'.$atributo_lst[$i].'"> '.$atributo_lst[$i+1].'='.$atributo_lst[$i+2].' </option>');
											}
											$i = $i + 3;
										}
										?>
									</select>

								</td>
							</tr>
							<tr>
								<td align="left">CF</td>
								<td align="left">
									<input type="text" name="cf" id="cf" value="<?php echo($entity->cf); ?>" size="6">
								</td>
							</tr>

							<tr>
								<td align="left">
								</td>
								<td align="left">
									<input type="button" id="cancel_btn" value="Cancelar" onclick="javascript:location.href='antecedente_lst.php'"> | <input type="submit" id="create_btn" value="Guardar">
								</td>
							</tr>
						</table>


					</form>

				</div>



			</div>
		</div>

</body>
</html>