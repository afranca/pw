<?php 	include('classes/Antecedente.class.php');
		include('classes/Atributo.class.php');
?>

<?php
	$entity = New Antecedente();

	$atributoEnt = New Atributo();
	$atributo_lst = $atributoEnt->readAll();
?>

<html>
<?php include('head.php'); ?>
<body>

		<div class="page">

			<div class="main">

				<div class="menu">

					<h1>Crear Antecedente</h1>

					<br>
					<form name="form1" method="post"  action="antecedente_save_or_update.php">

						<table width="94%" border="1" align="left">



							<tr>
								<td align="left">Atributo / Valor</td>
								<td align="left">

								</td>
							</tr>


							<?php
							$i=0;
							while($i<count($atributo_lst)){
								echo('<tr>');
								echo('	<td> </td>');
								echo('	<td>');
								echo('		<input type="checkbox" name="id_atributo[]" id="id_atributo[]" value="'.$atributo_lst[$i].'"> '.$atributo_lst[$i+1].'='.$atributo_lst[$i+2]);
								echo('	</td>');
								echo('</tr>');
								$i = $i + 3;
							}
							?>

							<tr>
								<td align="left">
								</td>
								<td align="left">
									<input type="button" id="cancel_btn" value="Cancelar" onclick="javascript:location.href='antecedente_lst.php'"> | <input type="submit" id="create_btn" value="Crear">
								</td>
							</tr>
						</table>


					</form>

				</div>



			</div>
		</div>

</body>
</html>