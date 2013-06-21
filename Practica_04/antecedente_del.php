<?php
	include('classes/Antecedente.class.php');
?>

<?php

	$reglaEntity = New Regla();
	$antecedenteEntity = New Antecedente();


	$ret = false;
	if (isset($_GET['id'])){
		$reglaEntity = $reglaEntity->read($_GET['id']);
		$ret = $reglaEntity->delete();
	}
	header( 'Location: regla_lst.php?ret='.$ret) ;

?>
