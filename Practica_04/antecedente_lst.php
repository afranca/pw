<?php include('classes/Antecedente.class.php'); ?>

<html>
<body>

		<div class="page">

			<div class="main">

				<div class="menu">

					<h1>Lista Antecedente</h1>



					<br>
					<table width="94%" border="1" align="left">

						<tr>

							<td align="left">antecedente id</td>
							<td align="left">atributo id</td>
							<td align="left">valor</td>

						</tr>


					<?PHP

						$antecedente = New Antecedente();
						$resultArr = $antecedente->readAll();
						$max = count($resultArr);
						$i = 0;
						while($i<$max){

							echo('<tr>');
							echo('	<td colspan="1" align="left"><a href="antecedente_edt.php?id='.$resultArr[$i].'">'.$resultArr[$i].'</a></td>');
							echo('	<td colspan="1" align="left">'.$resultArr[$i+1].'</td>');
							echo('	<td colspan="1" align="left">'.$resultArr[$i+2].'='.$resultArr[$i+3].'</td>');

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