<?php
session_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');
	
$query=mysql_query("INSERT INTO GROUP_NEWSLETTER (GROUP_NAME, DELETED) VALUES ('NEWGROUP', 'NO') ") or die (mysql_error())	;

if($query){
header('Location: index.php');
};
?>