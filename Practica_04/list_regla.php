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

					<table width="94%" border="0" align="left">
						<!--
						<tr>

							<td colspan="4" align="left">Regla</td>

							<td  colspan="4" align="left">Atecedente</td>

							<td align="left">Consecuente</td>
							<td align="left">&nbsp;</td>
							<td align="left">CF</td>
						</tr>

						-->

					<!-- <div class="div_reglas"> -->

					<?PHP
						$antecedente = New Antecedente();
						$regla = New Regla();
						$resultArr = $regla->readAll();
						$max = count($resultArr);
						$i = 0;
						while($i<$max){

							echo('<tr> <td> <div class="div_reglas_row">');
							echo('	<div class="div_id">REGLA '.$resultArr[$i].'</div>');

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
							echo('	<div class="div_gap"> &nbsp;</div>');
							echo('	<div class="div_if"> IF </div>');
							echo('	<div class="div_gap"> &nbsp;</div>');
							echo('	<div class="div_antecedente">'.$antecedenteStr.'</div>');
							echo('	<div class="div_gap"> &nbsp;</div>');
							echo('	<div class="div_then"> THEN</div>');
							echo('	<div class="div_gap"> &nbsp;</div>');
							echo('	<div class="div_consecuente">'.$resultArr[$i+4].'='.$resultArr[$i+5].'</div>');
							echo('	<div class="div_gap"> &nbsp;</div>');
							echo('	<div class="div_cf">'.$resultArr[$i+3].'</div>');

							echo(' </div> </td></tr>');
							$i = $i + 6;

							echo('<tr>  <td colspan="11"> &nbsp;</td> </tr>');


						}
					?>
					<!--</table>  </div>-->





				</div>



			</div>
		</div>

</body>
</html>