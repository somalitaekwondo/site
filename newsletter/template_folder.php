<?php
session_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');
	
?>
<?php if ($_GET['delete']) echo "Your Template has been deleted successfully"; ?>
<br /><br /><a href="index.php">RETURN</a><br /><br />

<form action="addtemplate.php" method="POST">
<p>TEMPLATE NAME : <input type="text" name="name_template"></p>
<p>TEMPLATE BODY : </p>
<p><textarea name="templatebody" rows="25" cols="100" style="color: black; background-color: silver; font-size: 12pt; font-family: Comic Sans MS;">
<?php if($_SESSION['TEMPLATE_SESSION']!=""){ echo $_SESSION['TEMPLATE_SESSION']; }; ?>
</textarea></p>

<p><input type="submit" value="CREATE"></p>
</form>

<br /><br />

<br />
<table>
<?php $check_query = mysql_query("SELECT * FROM TEMPLATE_NEWSLETTER WHERE DELETED_TEMPLATE LIKE 'NO' ")or die (mysql_error()); 
while($array_check = mysql_fetch_array($check_query)){ ?>
<p><?php echo $array_check['NAME_TEMPLATE']; ?></p>
<p><input type="button" value="EDIT TEMPLATE" onClick="javascript: document.location.href = 'edittemplate.php?idtemplate=<?php echo $array_check['ID_TEMPLATE_NEWSLETTER']; ?>';" /></p>
<p><input type="button" value="DELETE TEMPLATE" onClick="javascript: document.location.href = 'deltemplate.php?idtemplate=<?php echo $array_check['ID_TEMPLATE_NEWSLETTER']; ?>';" /></p>

<?php }; ?>
</table>


<br /><br /><a href="index.php">RETURN</a>