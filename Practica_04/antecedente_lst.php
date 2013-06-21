<?php include('classes/Antecedente.class.php'); ?>

<html>
<?php include('head.php'); ?>
<body>

		<div class="page">

			<div class="main">

				<div class="menu">

					<h1>Lista Antecedente</h1>

					<?php include('error_message.php'); ?>

					<br>
					<a href="antecedente_new.php">Crear Novo</a>
					<br><br>


					<table width="94%" border="1" align="left">

						<tr>

							<td align="left">antecedente id</td>
							<td align="left">accion</td>


						</tr>


					<?PHP

						$antecedente = New Antecedente();
						$resultArr = $antecedente->readAll();
						$max = count($resultArr);
						$i = 0;
						while($i<$max){

							echo('<tr>');
							echo('	<td colspan="1" align="left"><a href="antecedente_edt.php?id='.$resultArr[$i].'"> Antecedente');
							echo('	 '.$resultArr[$i].'</a></td>');
							//echo('	<td colspan="1" align="left"> delete</td>');
							echo('	<td colspan="1" align="left"> <a href="javascript:deleteEntry(\'antecedente\','.$resultArr[$i].');">del</a></td>');

							echo('</tr>');
							$i = $i + 4;
						}
					?>
					</table>
				</div>



			</div>
		</div>

</body>
</html>