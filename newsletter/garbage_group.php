<?php
session_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');

	?>
	<br /><br /><a href="index.php">RETURN</a><br /><br />
	<?php
	$query=mysql_query("SELECT * FROM GROUP_NEWSLETTER WHERE DELETED LIKE 'YES'");
	while($array=mysql_fetch_array($query)){
	
	echo "<p>".$array['GROUP_NAME']; ?> <input type="button" value="RECOVER" onClick="javascript: document.location.href = 'recover_group.php?edit=<?php echo $array['ID_GROUP_NEWSLETTER']; ?>';" /> </p> 
	
	<?php
	
	
	};
	
	?>

	<br /><br /><a href="index.php">RETURN</a>