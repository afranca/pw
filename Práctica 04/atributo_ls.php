<?php include('classes/Atributo.class.php'); ?>

<html>
<body>

		<div class="page">

			<div class="main">

				<div class="menu">

					<h1>Lista Atributo</h1>

					<br>
					<table width="94%" border="1" align="left">

						<tr>

							<td colspan="3" align="left">Id</td>
							<td align="left">Atributo</td>
							<td align="left">Valor</td>

						</tr>


					<?PHP

						$atributo = New Atributo();
						$resultArr = $atributo->readAll();
						$max = count($resultArr);
						$i = 0;
						while($i<$max){

							echo('<tr>');
							echo('	<td colspan="3" align="left"><a href="blah.php?id='.$resultArr[$i].'">'.$resultArr[$i].'</a></td>');
							echo('	<td colspan="1" align="left">'.$resultArr[$i+1].'</td>');
							echo('	<td colspan="1" align="left">'.$resultArr[$i+2].'</td>');

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