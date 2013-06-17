<?php

$server_db = "localhost";
$user_db = "gcu";
$password_db = "gcuip3";
$name_db = "016601";

$link = mysql_connect("$server_db","$user_db","$password_db") or die("cannot connect.");

$sel = mysql_select_db("$name_db",$link)  or die("cannot connect.");

if(session_id() == '') {
	session_start();
}
?>