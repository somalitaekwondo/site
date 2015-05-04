<?php
session_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');
	
	$query=mysql_query("SELECT * FROM GROUP_NEWSLETTER WHERE DELETED LIKE 'NO' ");
?>
<br /><br /><a href="index.php">RETURN</a><br /><br />

<form action="addmail.php" method="POST">
<p>EMAIL  :<input type="text" name="email"></p>
<p>NAME: <input type="text" name="name"></p>
<p>SELECT A GROUP</p><br />
<?php 

while($array=mysql_fetch_array($query)){ ?>

<p><?php echo $array['GROUP_NAME']; ?> <input type="radio" name="group" value="<?php echo $array['ID_GROUP_NEWSLETTER']; ?>"></p>

<?php };

?>
<p><input type="submit" value="CREATE"></p>
</form>

<br /><br /><a href="index.php">RETURN</a>