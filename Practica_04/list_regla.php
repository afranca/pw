<?php include('classes/Regla.class.php'); ?>
<?php include('classes/Antecedente.class.php'); ?>
<?php include('classes/Atributo.class.php'); ?>

<html>
<?php include('head.php'); ?>
<body>

		<div class="page">

			<div class="main">

				<div class="menu">

					<h1>Reglas Visualizacion</h1>



					<br>

					<br><br>
					<table width="94%" border="1" align="left">

						<tr>

							<td colspan="3" align="left">Regla</td>
							<td align="left">Atecedente</td>
							<td align="left">Consecuente</td>
							<td align="left">CF</td>
						</tr>


					<?PHP
						$antecedente = New Antecedente();
						$regla = New Regla();
						$resultArr = $regla->readAll();
						$max = count($resultArr);
						$i = 0;
						while($i<$max){

							echo('<tr>');
							echo('	<td colspan="3" align="left">REGLA '.$resultArr[$i].'</td>');

							$resultArrAntecedente = $antecedente->findAntecedentesById($resultArr[$i+1]);
							$maxAntecedente = count($resultArrAntecedente);
							$j = 0;
							$antecedenteStr="";
							while($j<$maxAntecedente){
								$antecedenteStr = $antecedenteStr.' '.$resultArrAntecedente[$j].'='.$resultArrAntecedente[$j+1];
								$j=$j+2;
								if ($j<$maxAntecedente){
									$antecedenteStr = $antecedenteStr .' <br> &nbsp;&nbsp;&nbsp; AND <br>';
								}
							}
							echo('	<td colspan="1" align="left">'.$antecedenteStr.'</td>');

							echo('	<td colspan="1" align="left">'.$resultArr[$i+4].'='.$resultArr[$i+5].'</td>');
							echo('	<td colspan="1" align="left">'.$resultArr[$i+3].'</td>');

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