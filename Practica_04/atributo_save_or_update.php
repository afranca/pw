<?php include('classes/Atributo.class.php'); ?>

<?php

	$entity = New Atributo();


	$entity->id = $_POST['id'];
	$entity->atributo = $_POST['atributo'];
	$entity->valor = $_POST['valor'];

	$ret = false;
	if (isset($_POST['id'])){
		$ret = $entity->update();
	}else {
		$ret = $entity->create();
	}

	header( 'Location: atributo_lst.php?ret='.$ret) ;

?>
