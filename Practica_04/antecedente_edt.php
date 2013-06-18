<?php 	include('classes/Antecedente.class.php');
		include('classes/Atributo.class.php');
?>

<?php
	$entity = New Antecedente();
	$entity = $entity->read($_GET['id']);

	$atributoEnt = New Atributo();
	$atributo_lst = $atributoEnt->readAll();
?>

<html>
<body>

		<div class="page">

			<div class="main">

				<div class="menu">

					<h1>Editar Antecedente</h1>

					<br>
					<form name="form1" method="post"  action="antecedente_save_or_update.php">
						<table width="94%" border="1" align="left">

							<tr>
								<td align="left">Atributo / Valor</td>
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
								<td align="left">
								</td>
								<td align="left">
									<input type="button" id="cancel_btn" value="Cancelar" onclick="javascript:location.href='antecedente_lst.php'"> | <input type="submit" id="create_btn" value="Crear">
								</td>
							</tr>
						</table>

						<input type="hidden" name="id" id="id" value="<?php echo($entity->id); ?>">
					</form>

				</div>



			</div>
		</div>

</body>
</html>