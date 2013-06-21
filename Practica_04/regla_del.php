<?php
	include('classes/Regla.class.php');

?>

<?php

	$reglaEntity = New Regla();

	$ret = false;
	if (isset($_GET['id'])){
		$reglaEntity = $reglaEntity->read($_GET['id']);
		$ret = $reglaEntity->delete();
	}
	header( 'Location: regla_lst.php?ret='.$ret) ;

?>
