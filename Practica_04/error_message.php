					<div>
						<?php
							$messages = array("Operacion bien sucedida", "ERROR: generic error", "ERROR: Entidade tiene dependencias", "ERROR: BD error", "ERROR: Informacion Duplicada");
							if (isset($_GET['ret'] ) ) {
								$ret = $_GET['ret'];

								echo ('<font color="red">'.$messages[$ret].'</font>');

							}

						?>
					</div>
