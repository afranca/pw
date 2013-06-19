<?php include('classes/Regla.class.php'); ?>

<?php

	$entity = New Regla();

	$entity->cf = $_POST['cf'];
	$entity->id_atributo = $_POST['id_atributo'];
	$entity->id_antecedente = $_POST['id_antecedente'];


	$ret = false;
	if (isset($_POST['id'])){
		$entity->id = $_POST['id'];
		$ret = $entity->update();
	}else {
		$ret = $entity->create();
	}

	header( 'Location: regla_lst.php?ret='.$ret) ;

?>
