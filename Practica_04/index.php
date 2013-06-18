<?php include('includes/constantes.php'); ?>
<?php include('sesion_profesor.php'); ?>

<?php include('clases/Alumno.class.php'); ?>

<?php include('header.php'); ?>

		<div class="page">
			<div class="main">
				<?php  include('css_valido_box.php'); ?>
				<?php  include('menu_principal.php'); ?>
				<div class="menu">

					<h1>VER ALUMNO RESULT</h1>

					<?php include('error_message.php'); ?>
					<p><a href="alumno_crear_form.php"> Nuevo Alumno</a></p>

					<br>
					<table width="94%" border="1" align="left">

						<tr>

							<td colspan="3" align="left">NOMBRE</td>
							<td align="left">CORREO</td>
						</tr>


					<?PHP

						$alumno = New Alumno();
						$resultArr = $alumno->verTodos();
						$max = count($resultArr);
						$i = 0;
						while($i<$max){

							echo('<tr>');
							echo('	<td colspan="3" align="left"><a href="alumno_ver_result.php?al_cod_alumno='.$resultArr[$i].'">'.$resultArr[$i+1].' '.$resultArr[$i+2].' '.$resultArr[$i+3].'</a></td>');
							echo('	<td colspan="1" align="left">'.$resultArr[$i+4].'</td>');

							echo('</tr>');
							$i = $i + 6;
						}
					?>
					</table>
				</div>

				<?php include('logoff_box.php'); ?>

			</div>
		</div>

<?php include('footer.php'); ?>
