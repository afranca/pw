<?php include('classes/Antecedente.class.php'); ?>

<?php

	$entity = New Antecedente();

	//$entity->id_atributo = $_POST['id_atributo'];

	$ret = false;
	if (isset($_POST['id'])){
		$entity->id = $_POST['id'];
		$ret = $entity->update();
	}else {
		//$ret = $entity->create();
		$currentId = $entity->findLastId() +1 ;

		foreach($_POST['id_atributo'] as $key => $value){
			//echo('['.$key.'] = '.$value.'<BR>');

			$ret = $entity->create($currentId,$value);
		}
	}

	header( 'Location: antecedente_lst.php?ret='.$ret) ;

?>
