<?php
session_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');

$process = $_POST['process'];
$id_group = $_SESSION['group'];
$group_name = $_POST['group_name'];

if($process=="edit_group_name"){
$query=mysql_query("UPDATE GROUP_NEWSLETTER SET GROUP_NAME='$group_name' WHERE ID_GROUP_NEWSLETTER LIKE '$id_group'") or die(mysql_error());
	if($query){
	header("Location: group.php?edit=".$id_group);
	};

};


?>