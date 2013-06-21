<?php include('classes/Atributo.class.php'); ?>

<?php

	$entity = New Atributo();


	$entity->id = $_POST['id'];
	$entity->atributo = $_POST['atributo'];
	$entity->valor = $_POST['valor'];

	$ret = 0;
	$retLocal = false;
	if (isset($_POST['id'])){
		$retLocal = $entity->update();
	}else {
		$retLocal = $entity->create();
	}

	if (!$retLocal){
		$ret = 3;
	}
	header( 'Location: atributo_lst.php?ret='.$ret) ;

?>
