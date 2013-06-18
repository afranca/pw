<?php include('classes/Atributo.class.php'); ?>

<?php

	$entity = New Atributo();


	$entity->id = $_POST['id'];
	$entity->atributo = $_POST['atributo'];
	$entity->valor = $_POST['valor'];


	$ret = $entity->create();

	header( 'Location: atributo_ls.php?ret='.$ret) ;

?>
