<?php
	include('classes/Antecedente.class.php');
?>

<?php
	$antecedenteEntity = New Antecedente();


	$ret = false;
	if (isset($_GET['id'])){
		$antecedenteEntity = $antecedenteEntity->read($_GET['id']);

		$ret = $antecedenteEntity->checkAntecedenteIsUsed();
		if (!$ret){
			$ret = $antecedenteEntity->delete();
		}

	}
	header( 'Location: antecedente_lst.php?ret='.$ret);

?>
