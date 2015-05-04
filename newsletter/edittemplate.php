<?php
session_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');
	
	$id_template = $_GET['idtemplate'];
	$query=mysql_query("SELECT * FROM TEMPLATE_NEWSLETTER WHERE ID_TEMPLATE_NEWSLETTER LIKE '$id_template' AND DELETED_TEMPLATE LIKE 'NO' ")or die (mysql_error()); 
	
	$templatebody = $_POST['templatebody'];
	
	if($array=mysql_fetch_array($query)){
	$file =  "template/".$array['CONTENU_TEMPLATE'];
	// echo $file." ".gettype($file);
	$content = file_get_contents($file);
	$name = $_POST['name_template'];
	$newfile = $name.".txt";
	$folder_newfile = "template/".$newfile;
	};
	
	if ($_POST['templatebody']) $content = $templatebody;
	
	?>
	
<br /><br /><a href="index.php">RETURN</a><br /><br />

<?php if ($_GET['saved']) echo "Your Template has been saved successfully <br />"; ?>

<form action="edittemplate?saved=saved&idtemplate=<?php echo $id_template;?>" method="POST">
<p>TEMPLATE NAME : <input type="text" name="name_template" value="<?php if ($_POST['templatebody']) echo $name; else echo $array['NAME_TEMPLATE']; ?>"></p>
<p>TEMPLATE BODY : </p>
<p><textarea name="templatebody" rows="25" cols="100" style="color: black; background-color: silver; font-size: 12pt; font-family: Comic Sans MS;">
<?php echo $content; ?></textarea></p>
<input type="hidden" name="edition" value="edition">
<p><input type="submit" value="SAVE"></p>
</form>



<br /><br /><a href="index.php">RETURN</a>

<?php if($_POST['edition']){
$query_update = mysql_query("UPDATE TEMPLATE_NEWSLETTER SET NAME_TEMPLATE='$name', CONTENU_TEMPLATE='$newfile' WHERE ID_TEMPLATE_NEWSLETTER LIKE '$id_template'")or die (mysql_error()); 
if(!$query_update){ echo "something went wrong"; } 
	else { 
	file_put_contents($file, $templatebody)or die("can't write File"); 
	rename($file,$folder_newfile)or die("can't change name File"); 
	};
};

?>