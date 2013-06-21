<?php
	include('classes/Antecedente.class.php');
?>

<?php
	$antecedenteEntity = New Antecedente();


	$ret = 0;
	$retLocal = false;
	if (isset($_GET['id'])){
		$antecedenteEntity = $antecedenteEntity->read($_GET['id']);

		$retLocal = $antecedenteEntity->checkAntecedenteIsUsed();
		if (!$retLocal){
			$retLocal = $antecedenteEntity->delete();
			if (!$retLocal){
				$ret = 3;
			}
		} else {
			$ret = 2;
		}

	} else{
		$ret = 1;
	}

	header( 'Location: antecedente_lst.php?ret='.$ret);

?>
