<?php
	include('classes/Antecedente.class.php');
	include('classes/Regla.class.php');
	include('classes/Atributo.class.php');
?>

<?php
	$antecedenteEntity = New Antecedente();
	$reglaEntity = New Regla();
	$atributoEntity = New Atributo();

	$ret = false;
	if (isset($_GET['id'])){
		$atributoEntity = $atributoEntity->read($_GET['id']);


		$ret = $atributoEntity->checkAtributoIsUsed();
		if (!$ret){
			$ret = $atributoEntity->delete();
		}

	}
	header( 'Location: atributo_lst.php?ret='.$ret);

?>
