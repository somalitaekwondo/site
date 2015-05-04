<?php
session_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');
	
	?>
	<br /><br /><a href="index.php">RETURN</a><br /><br />
	<form action="change_mail_group.php" method="POST">
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
		
		<p><?php echo $array['MAIL_NEWSLETTER']; ?></p>
			<?php $query_group=mysql_query("SELECT * FROM GROUP_NEWSLETTER WHERE DELETED LIKE 'NO' ");?>
		<?php while($array_group=mysql_fetch_array($query_group)){ ?>
		<p><?php echo $array_group['GROUP_NAME'];?><input type="button" value="CHANGE TO THIS GROUP" onClick="javascript: document.location.href = 'changemailgroup.php?idgroup=<?php echo $array_group['ID_GROUP_NEWSLETTER'];?>&idmail=<?php echo $array['ID_MAIL_NEWSLETTER']; ?>';" /></p>
		<?php }; ?>
		<?php
		};
		if($count == 0 ) echo "No mail found.";	
	};
	if($_GET['changed']) echo "<br />The group mail has been changed successfully.";
	?>
	
	
	<br /><br /><a href="index.php">RETURN</a>