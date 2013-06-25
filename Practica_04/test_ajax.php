<?php
	$q=$_GET["q"];

	$con = mysql_connect('localhost', 'gcu', 'gcuip3');
	if (!$con) {
	  die('Could not connect: ' . mysql_error());
	 }

	mysql_select_db("016601", $con);

	//$sql="SELECT * FROM user WHERE id = '".$q."'";
	$sql = "SELECT b.atributo,b.valor  FROM antecedente a, atributo b WHERE a.id_atributo = b.id and a.id=".$q;

	$result = mysql_query($sql);

	$strRet="";
	while($row = mysql_fetch_array($result)) {
	  $strRet = $strRet . $row['atributo']." = ". $row['valor'] . "<br>AND<br>";

	}
	echo( substr($strRet,0,strlen($strRet)-11) );
	mysql_close($con);
?>