<?php
session_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');
	
	
$id_img = $_GET['idimg'];


$query=mysql_query("UPDATE IMG_NEWSLETTER SET DELETED='YES' WHERE ID_IMG_NEWSLETTER LIKE '$id_img'") or die(mysql_error());

if($query){
header('Location: image_folder.php?delete=delete');
};
?>