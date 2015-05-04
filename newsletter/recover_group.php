<?php
session_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');
	
	$id_group = $_GET['edit'];
	
	$query=mysql_query("UPDATE GROUP_NEWSLETTER SET DELETED='NO' WHERE ID_GROUP_NEWSLETTER LIKE '$id_group'") or die(mysql_error());
	if($query){
	header('Location: garbage_group.php');
	};
	
	?>