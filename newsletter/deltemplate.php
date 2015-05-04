<?php
session_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');
	
	
$id_template = $_GET['idtemplate'];

$myquery = mysql_query("SELECT * FROM TEMPLATE_NEWSLETTER WHERE ID_TEMPLATE_NEWSLETTER LIKE '$id_template'");
$myarray = mysql_fetch_array($myquery);
$oldfile = $myarray['CONTENU_TEMPLATE'];
$newfile = $oldfile."DELETED";
$folder_oldfile = "template/".$oldfile;
$folder_newfile = "template/".$newfile;
$newname = $myarray['NAME_TEMPLATE']."DELETED";

$query=mysql_query("UPDATE TEMPLATE_NEWSLETTER SET NAME_TEMPLATE='', DELETED_TEMPLATE='YES' WHERE ID_TEMPLATE_NEWSLETTER LIKE '$id_template'") or die(mysql_error());

if($query){
rename($folder_oldfile,$folder_newfile);
header('Location: template_folder.php?delete=delete');
};
?>