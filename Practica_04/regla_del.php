<?php
	include('classes/Regla.class.php');

?>

<?php

	$reglaEntity = New Regla();

	$ret = 0;
	$retLocal = false;
	if (isset($_GET['id'])){
		$reglaEntity = $reglaEntity->read($_GET['id']);
		$retLocal = $reglaEntity->delete();
		if (!$retLocal){
			$ret = 3;
		}
	}
	header( 'Location: regla_lst.php?ret='.$ret) ;

?>
