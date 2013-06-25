<?php
	$q=$_GET["q"];

	$con = mysql_connect('localhost', 'gcu', 'gcuip3');
	if (!$con) {
	  die('Could not connect: ' . mysql_error());
	 }

	mysql_select_db("016601", $con);

	$sql = "SELECT b.atributo,b.valor  FROM  atributo b WHERE  b.id=".$q;

	$result = mysql_query($sql);

	$strRet="";
	while($row = mysql_fetch_array($result)) {
	  $strRet = $strRet . $row['atributo']." = ". $row['valor'] ;

	}
	echo( $strRet );
	mysql_close($con);
?>