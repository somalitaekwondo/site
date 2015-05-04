<?php
session_start();
$_SESSION['TEMPLATE_SESSION'] = "";
include ('connect.php');

	if($_SESSION['LOGIN'] == "YES")
	{
	
	// SYSTEM OF NEWSLETTER VERSION PIENTOW MATHEYAS //
	?>
<html>
<head>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.3.2.min.js"></script>  
  <script src="http://code.jquery.com/jquery-latest.js"></script> 
  <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js'></script>
</head> 
	
<script language="javascript" type="text/javascript">
function addtext(Template) {

		
 var str = "template/" +Template;

   $.get(str, function(data) {
             //var fileDom = $(data);
              var lines = data.split("\n");
              //var txt;
			  $.each(lines, function(n, elem) {
                 //txt = $('#down').append(elem);
			})
			//alert("teste");
			document.sendemail.message.value = data;  
         }); 
  
 }
  
</script>
	
	
	<table width="100%" border="0">
	<td>
	<a href="logout.php">Logout</a>
	<br /><br />
	</td>
	<td>
	<a href="create_group.php">Create a new group</a>
	<br /><br />
	<a href="garbage_group.php">Group Garbage</a>
	<br /><br />
	</td>
	<td>
	<a href="add_mail.php">Add Email</a>
	<br /><br />
	<a href="change_mail_group.php">Change Email Group</a>
	<br /><br />
	<a href="delete_mail.php">Delete Email</a>
	<br /><br />
	</td>
	<td>
	<a href="image_folder.php">Images Folder</a>
	<br />	
	</td>
	<td>
	<a href="template_folder.php">Templates Folder</a>
	</td>
	</table>
	
	<br />
	<table border="1">
	<tr>
	<td width="10%">
	<b>LOAD TEMPLATES</b>
	</td>
	<td><?php
	$query_template=mysql_query("SELECT * FROM TEMPLATE_NEWSLETTER WHERE DELETED_TEMPLATE LIKE 'NO' ")or die (mysql_error());
	$cont_template = 0;
	while($array_template=mysql_fetch_array($query_template)){ $cont_template++;?>
	<input type="button" value="<?php echo $array_template['NAME_TEMPLATE']; ?>" onClick="addtext('<?php echo $array_template['CONTENU_TEMPLATE']; ?>');">&nbsp;&nbsp;&nbsp;
	<?php }; if($cont_template == 0) echo "No template found.";
	?></td>
	</tr>
	</table>
	
	<table width="100%" style="height: 100%;" border="0">
	<tr>
	<td>
	<form name="sendemail" action="sending.mail.php" method="POST">
	<p><b>Subject: </b><input type="text" name="subject" size="50" style="color: black; background-color: silver; font-size: 12pt; font-family: Comic Sans MS;"></p>
	<p><b>Body Message:</b></p>
	<p><textarea name="message" rows="25" cols="85" style="color: black; background-color: silver; font-size: 12pt; font-family: Comic Sans MS;"></textarea></p>
	</td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>
	<p><b>GROUP:</b></p>
	<p><input type="radio" name="group" value="all" checked> ALL </p>
	
	<?php
	$query=mysql_query("SELECT * FROM GROUP_NEWSLETTER WHERE DELETED LIKE 'NO'");
	while($array=mysql_fetch_array($query)){ ?>
	
	<p><input type="radio" name="group" value="<?php echo $array['ID_GROUP_NEWSLETTER']; ?>">
	<?php echo $array['GROUP_NAME']; ?> <?php if($array['ID_GROUP_NEWSLETTER']!="1") { ?>
	<input type="button" value="EDIT" onClick="javascript: document.location.href = 'group.php?edit=<?php echo $array['ID_GROUP_NEWSLETTER']; ?>';" />
	<input type="button" value="DELETE" onClick="javascript: document.location.href = 'delete_group.php?edit=<?php echo $array['ID_GROUP_NEWSLETTER']; ?>';" /> 
	<?php }; ?>
	</p>
	<textarea rows="15" cols="40" disabled style="resize: none; font-size: 11pt; font-family: Arial; color: black; background-color: silver;">
	<?php
	$id_group_newsletter = $array['ID_GROUP_NEWSLETTER'];
	$query2=mysql_query("SELECT * FROM MAIL_NEWSLETTER WHERE ID_GROUP_NEWSLETTER LIKE '$id_group_newsletter' AND DELETED LIKE 'NO' ");
	echo ".\n";
	while($array2=mysql_fetch_array($query2)){
	echo $array2['MAIL_NEWSLETTER']."\n";
	}; ?>
	</textarea>
	<?php };?>
	
	</td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>
	</p><b>IMAGE FOLDER</b><p><br />
	<p><input type="radio" name ="img" value="NO" checked >NONE</p>
	<?php
	
	$query=mysql_query("SELECT * FROM IMG_NEWSLETTER WHERE DELETED LIKE 'NO' ") or die (mysql_error());
	$count = 0;
		while($array=mysql_fetch_array($query)){ 
		$count++;
		?>
		<p><input type="radio" name ="img" value="<?php echo $array['NAME_IMG'];?>"><a href="<?php echo "img/".$array['NAME_IMG']; ?>" target="_blank" ><b><?php echo "img/".$array['NAME_IMG']; ?></b></a></p>
		<?php
		};
		if($count == 0 ) echo "No image found.";
	
	?>
	</td>
	<td>
	<input type="submit" value="SEND">
	</form>
	</td>
	</tr>
	</table>
	
	
	<?php
	} 
		else
		{ ///////// LOGIN PAGE //////////////
		
		?>
		<center>
		<form method="POST" action="auth.php">
		<p>Login: <input type="text" name="LOGIN"><br /></p>
		<p>Password: <input type="password" name="PASSWORD"><br /></p>
		<p><input type="submit" value="Login"></p><br />
		<?php if($_GET['error']) echo "user or password incorrect."?>
		</form>
		</center>
		<?php
		
		};

?>
</html>