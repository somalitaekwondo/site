<?php
session_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');
	
	?>
	<br /><br /><a href="index.php">RETURN</a><br /><br />
	<form action="delete_mail.php" method="POST">
	<p> Search: <input type="text" name="mail"> </p>
	<p><input type="submit" value="search"></p>
	</form>
	
	<br /><br />
	
	<?php
	if($_POST['mail']){
	$mail = $_POST['mail'];
	$query=mysql_query("SELECT * FROM MAIL_NEWSLETTER WHERE MAIL_NEWSLETTER LIKE '$mail' AND DELETED LIKE 'NO' ") or die (mysql_error());
	$count = 0;
		while($array=mysql_fetch_array($query)){ 
		$count++;
		?>
		
		<p><?php echo $array['MAIL_NEWSLETTER']; ?> <input type="button" value="DELETE" onClick="javascript: document.location.href = 'delmail.php?idmail=<?php echo $array['ID_MAIL_NEWSLETTER']; ?>';" /></p>
		
		<?php
		};
		if($count == 0 ) echo "No mail found.";	
	};
	if($_GET['delete']) echo "<br />The email was deleted successfully.";
	?>
	
	
	<br /><br /><a href="index.php">RETURN</a>