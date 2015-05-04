<?php
session_start();
ob_start();
include('connect.php');
$login = $_POST['LOGIN'];
$password = $_POST['PASSWORD'];

$query=mysql_query("SELECT * FROM USER_NEWSLETTER WHERE USER LIKE '$login' AND PASSWORD LIKE '$password'") or die (mysql_error());
	
	if($array=mysql_fetch_array($query)){
	$_SESSION['LOGIN'] = "YES";
	header('Location: index.php');
	} else { header('Location: index.php?error=error');};

?>