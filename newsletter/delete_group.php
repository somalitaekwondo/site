<?php
session_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');
	
	
$id_group = $_GET['edit'];
$_SESSION['group'] = $id_group; 


$query=mysql_query("UPDATE GROUP_NEWSLETTER SET DELETED='YES' WHERE ID_GROUP_NEWSLETTER LIKE '$id_group'") or die(mysql_error());

if($query){
header('Location: index.php');
};
?>