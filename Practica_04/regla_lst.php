<?php include('classes/Regla.class.php'); ?>

<html>
<?php include('head.php'); ?>
<body>

		<div class="page">

			<div class="main">

				<div class="menu">

					<h1>Lista Regla</h1>


					<?php include('error_message.php'); ?>
					<br>
					<a href="regla_new.php">Crear Novo</a>
					<br><br>
					<table width="94%" border="1" align="left">

						<tr>

							<td colspan="3" align="left">Regla</td>
							<td align="left">Atecedente</td>
							<td align="left">Consecuente</td>
							<td align="left">CF</td>
							<td align="left">Accion</td>
						</tr>


					<?PHP

						$regla = New Regla();
						$resultArr = $regla->readAll();
						$max = count($resultArr);
						$i = 0;
						while($i<$max){

							echo('<tr>');
							echo('	<td colspan="3" align="left"><a href="regla_edt.php?id='.$resultArr[$i].'">Regla '.$resultArr[$i].'</a></td>');
							echo('	<td colspan="1" align="left">'.$resultArr[$i+1].'</td>');
							echo('	<td colspan="1" align="left">'.$resultArr[$i+2].'</td>');
							echo('	<td colspan="1" align="left">'.$resultArr[$i+3].'</td>');
							echo('	<td colspan="1" align="left"> <a href="javascript:deleteEntry(\'regla\','.$resultArr[$i].');">del</a></td>');

							echo('</tr>');
							$i = $i + 6;
						}
					?>
					</table>
				</div>



			</div>
		</div>

</body>
</html>