<?php 	include('classes/Antecedente.class.php');
		include('classes/Atributo.class.php');
?>

<?php
	$entity = New Antecedente();
	$entity = $entity->read($_GET['id']);
	$entityAtrLst = $entity->findAtributos();

	$atributoEnt = New Atributo();
	$atributo_lst = $atributoEnt->readAll();
?>

<html>
<?php include('head.php'); ?>
<body>

		<div class="page">

			<div class="main">

				<div class="menu">

					<h1>Editar Antecedente</h1>

					<br>
					<form name="form1" method="post"  action="antecedente_save_or_update.php">
						<input type="hidden" name="id" id="id" value="<?php echo($entity->id); ?>">
						<table width="94%" border="1" align="left">
							<tr>
								<td align="left">Atributo / Valor</td>
								<td align="left">

								</td>
							</tr>


							<?php
							$i=0;

							while($i<count($atributo_lst)){
								$checked = "";
								$j=1;
								while($j<count($entityAtrLst)){
									//echo("while <br>");
									if ($entityAtrLst[$j] == $atributo_lst[$i]){
										echo("checked ".$atributo_lst[$i]." <br>");
										$checked="checked";
									}
									$j = $j + 4;
									//echo("final $j=".$j."<br>");
								}

								echo('<tr>');
								echo('	<td> </td>');
								echo('	<td>');
								echo('		<input type="checkbox" name="id_atributo[]" id="id_atributo[]" value="'.$atributo_lst[$i].'" '.$checked.'> '.$atributo_lst[$i+1].'='.$atributo_lst[$i+2]);
								echo('	</td>');
								echo('</tr>');
								$i = $i + 3;
							}
							?>

							<tr>
								<td align="left">
								</td>
								<td align="left">
									<input type="button" id="cancel_btn" value="Cancelar" onclick="javascript:location.href='antecedente_lst.php'"> | <input type="submit" id="create_btn" value="Guarder">
								</td>
							</tr>
						</table>


					</form>

				</div>



			</div>
		</div>

</body>
</html>