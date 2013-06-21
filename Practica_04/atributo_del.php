<?php
	include('classes/Antecedente.class.php');
	include('classes/Regla.class.php');
	include('classes/Atributo.class.php');
?>

<?php
	$antecedenteEntity = New Antecedente();
	$reglaEntity = New Regla();
	$atributoEntity = New Atributo();

	$retLocal = false;
	$ret=1;
	if (isset($_GET['id'])){
		$atributoEntity = $atributoEntity->read($_GET['id']);

		$retLocal = $atributoEntity->checkAtributoIsUsed();
		if (!$retLocal){
			if ($atributoEntity->delete()){
				$ret=0;
			} else {
				$ret=4;
			}
		}else{
			$ret=2;
		}

	}
	header( 'Location: atributo_lst.php?ret='.$ret);

?>
