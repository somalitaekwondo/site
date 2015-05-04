<?php
session_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');


$id_group = $_GET['edit'];
$_SESSION['group'] = $id_group; 


$query=mysql_query("SELECT * FROM GROUP_NEWSLETTER WHERE ID_GROUP_NEWSLETTER LIKE '$id_group'");
$array=mysql_fetch_array($query);

?>
<br /><br /><a href="index.php">RETURN</a><br /><br />

<form method="POST" action="process.php">
<input type="text" name="group_name" value="<?php echo $array['GROUP_NAME'];?>">
<input type="hidden" name="process" value="edit_group_name">
<input type="submit" value="Change">
</form>

<br /><br /><a href="index.php">RETURN</a>