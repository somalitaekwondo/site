<?php
session_start();
ob_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');
	
		function cssifysize($img) { 
		$dimensions = getimagesize($img); 
		$dimensions = str_replace("=\"", ":", $dimensions['3']); 
		$dimensions = str_replace("\"", "px;", $dimensions); 
		return $dimensions; 
		};
	
	?>
	<br /><br /><a href="index.php">RETURN</a><br /><br />
	<form action="image_folder.php" method="POST" enctype="multipart/form-data">
	<p> Image Name: <input type="text" name="name_image"> </p>
	<p>Locate Image: <input type="file" name="userfile" id="file"></p>
	<p><input type="submit" value="Upload"></p>
	</form>
	
	<br /><br />
	
	<?php
	
	if(($_POST['name_image'])){
	
	$nameimg = $_POST['name_image'];
	$uploaddir = 'img/'; 
	$uploadfile = $uploaddir . $nameimg; //basename($_FILES['userfile']['name']);
	
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) { 
	
	
	
	$query=mysql_query("INSERT INTO IMG_NEWSLETTER (NAME_IMG, DELETED) VALUES ('$nameimg', 'NO') ") or die (mysql_error())	;
	if($query) header('Location: image_folder?img_upload=success');
	
	} 
	else { echo "<br />Upload failed<br /><br />"; } 

	};		
			
			

			
			
	
	
	
	
	
	$query=mysql_query("SELECT * FROM IMG_NEWSLETTER WHERE DELETED LIKE 'NO' ") or die (mysql_error());
	$count = 0;
		while($array=mysql_fetch_array($query)){ 
		$count++;
		?>
		<?php 
		$img = "img/".$array['NAME_IMG']; 
		?>

		
		<p><b>Real Size:</b> <?php echo cssifysize($img); ?></p>
		<p><b>Display below:</b> width:200px; height:150px; </p>
		<p><a href="<?php echo "img/".$array['NAME_IMG']; ?>" target="_blank" ><img src="<?php echo "img/".$array['NAME_IMG']; ?>" width="200" height="150"></a></p><p><b><font size="+2"> <?php echo $array['NAME_IMG']; ?></b></font><input type="button" value="DELETE" onClick="javascript: document.location.href = 'delimg.php?idimg=<?php echo $array['ID_IMG_NEWSLETTER']; ?>';" /></p>
		<br />-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=<br />
		<?php
		};
		if($count == 0 ) echo "No image found.";	
	
	if($_GET['delete']) echo "<br />The Image has been deleted successfully.";
	if($_GET['img_upload']) echo "<br />The Image has been uploaded successfully.";
	
	?>
	
	
	<br /><br /><a href="index.php">RETURN</a><br /><br />
	
	
	