<?php include('classes/Atributo.class.php'); ?>

<html>
<?php include('head.php'); ?>
<body>

		<div class="page">

			<div class="main">

				<div class="menu">

					<h1>Atributo Edicion</h1>
					<?php include('error_message.php'); ?>
					<br>
					<a href="atributo_new.php"> Crear Novo</a>
					<br><br>
					<table width="94%" border="1" align="left">

						<tr>

							<td colspan="3" align="left">Id</td>
							<td align="left">Atributo</td>
							<td align="left">Valor</td>
							<td align="left">Accion</td>
						</tr>


					<?PHP

						$atributo = New Atributo();
						$resultArr = $atributo->readAll();
						$max = count($resultArr);
						$i = 0;
						while($i<$max){

							echo('<tr>');
							echo('	<td colspan="3" align="left"><a href="atributo_edt.php?id='.$resultArr[$i].'">'.$resultArr[$i].'</a></td>');
							echo('	<td colspan="1" align="left">'.$resultArr[$i+1].'</td>');
							echo('	<td colspan="1" align="left">'.$resultArr[$i+2].'</td>');
							echo('	<td colspan="1" align="left"> <a href="javascript:deleteEntry(\'atributo\','.$resultArr[$i].');">del</a></td>');

							echo('</tr>');
							$i = $i + 3;
						}
					?>
					</table>
				</div>



			</div>
		</div>

</body>
</html>