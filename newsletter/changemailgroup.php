<?php
session_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');
	
	
$id_mail = $_GET['idmail'];
$id_group = $_GET['idgroup'];


$query=mysql_query("UPDATE MAIL_NEWSLETTER SET ID_GROUP_NEWSLETTER='$id_group' WHERE ID_MAIL_NEWSLETTER LIKE '$id_mail'") or die(mysql_error());

if($query){
header('Location: change_mail_group.php?changed=group');
};

?>