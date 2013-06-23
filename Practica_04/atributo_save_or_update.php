<?php include('classes/Atributo.class.php'); ?>

<?php

	$entity = New Atributo();


	$entity->atributo = strtoupper($_POST['atributo']);
	$entity->valor = strtoupper($_POST['valor']);

	$ret = 0;
	$retLocal = false;
	if (!$entity->findDuplicate()){
		if (isset($_POST['id'])){
			$entity->id = $_POST['id'];
			$retLocal = $entity->update();
		}else {
			$retLocal = $entity->create();
		}

		if (!$retLocal){
			$ret = 3;
		}
	} else {
		$ret = 4;
	}
	header( 'Location: atributo_lst.php?ret='.$ret) ;

?>
