<?php include('classes/Antecedente.class.php'); ?>

<?php

	$entity = New Antecedente();

	$ret = 0;
	$retLocal = false;

	if (isset($_POST['id'])){
		$currentId = $_POST['id'];
		$retLocal = $entity->deleteEntries($currentId);
		foreach($_POST['id_atributo'] as $key => $value){
			$retLocal = $entity->update($currentId,$value);
			if (!$retLocal){
				$ret = 3;
			}
		}
	}else {
		$currentId = $entity->findLastId() +1 ;
		foreach($_POST['id_atributo'] as $key => $value){
			$retLocal = $entity->create($currentId,$value);
			if (!$retLocal){
					$ret = 3;
			}
		}
	}

	header( 'Location: antecedente_lst.php?ret='.$ret) ;

?>
