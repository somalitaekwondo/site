<?php
session_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');
	
	
$id_mail = $_GET['idmail'];


$query=mysql_query("UPDATE MAIL_NEWSLETTER SET DELETED='YES' WHERE ID_MAIL_NEWSLETTER LIKE '$id_mail'") or die(mysql_error());

if($query){
header('Location: delete_mail.php?delete=delete');
};
?>