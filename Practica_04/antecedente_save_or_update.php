<?php include('classes/Antecedente.class.php'); ?>

<?php

	$entity = New Antecedente();

	$ret = false;
	if (isset($_POST['id'])){
		$currentId = $_POST['id'];
		$ret = $entity->deleteEntries($currentId);
		foreach($_POST['id_atributo'] as $key => $value){
			//$ret = $entity->create($currentId,$value);
			$ret = $entity->update($currentId,$value);
		}
	}else {
		$currentId = $entity->findLastId() +1 ;
		foreach($_POST['id_atributo'] as $key => $value){
			$ret = $entity->create($currentId,$value);
		}
	}

	header( 'Location: antecedente_lst.php?ret='.$ret) ;

?>
