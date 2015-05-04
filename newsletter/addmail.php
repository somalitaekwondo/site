<?php
session_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');
	
	$email=$_POST['email'];
	$name=$_POST['name'];
	$group=$_POST['group'];
	
	?>
	<br /><br /><a href="index.php">RETURN</a><br /><br />
	<?php
	$query=mysql_query("INSERT INTO MAIL_NEWSLETTER (MAIL_NEWSLETTER, ID_GROUP_NEWSLETTER, NAME_NEWSLETTER, DELETED) VALUES ('$email', '$group', '$name', 'NO') ") or die (mysql_error())	;

if($query){

echo "The email ".$email." with the name ".$name." has been added successfully";

};

?>

<br /><br /><a href="index.php">RETURN</a>