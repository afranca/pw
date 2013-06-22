<?php include('classes/Regla.class.php'); ?>

<?php

	$entity = New Regla();

	$entity->cf = $_POST['cf'];
	$entity->id_atributo = $_POST['id_atributo'];
	$entity->id_antecedente = $_POST['id_antecedente'];


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



	header( 'Location: regla_lst.php?ret='.$ret) ;

?>
