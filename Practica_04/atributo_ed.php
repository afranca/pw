<?php include('classes/Atributo.class.php'); ?>

<?php

	echo("id:".$_POST.length);
	$entity = New Atributo();

	$entity = $entity->read($_POST['id']);

?>

<html>
<body>

		<div class="page">

			<div class="main">

				<div class="menu">

					<h1>Editar Atributo</h1>

					<br>
					<form name="form1" method="post"  action="atributo_new_ex.php">
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
									<input type="button" id="cancel_btn" value="Cancelar"> | <input type="submit" id="create_btn" value="Crear">
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