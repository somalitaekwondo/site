<?php
session_start();
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');
	
	$name_template=$_POST['name_template'];
	$templatebody=$_POST['templatebody'];
	$ourFileName = $name_template.".txt";
	
	
	?>
	<br /><br /><a href="index.php">RETURN</a><br /><br />
	<?php
	
	$check_query = mysql_query("SELECT * FROM TEMPLATE_NEWSLETTER WHERE NAME_TEMPLATE LIKE '$name_template'")or die (mysql_error());
	if(!$array_query=mysql_fetch_array($check_query)){	
	
		$query=mysql_query("INSERT INTO TEMPLATE_NEWSLETTER (NAME_TEMPLATE, CONTENU_TEMPLATE, DELETED_TEMPLATE) VALUES ('$name_template', '$ourFileName', 'NO') ") or die (mysql_error());
		if($query){


		//$ourFileHandle = fopen("template/".$ourFileName, 'w') or die("can't open file");
		//file_put_contents("template/".$ourFileName, $templatebody)or die("can't write File");
		//fclose($ourFileHandle);
		$file = "template/".$ourFileName;
		file_put_contents($file, $templatebody)or die("can't write File");
		echo "The Template has been added successfully";

		};

	} else { 
	echo "Template ".$name_template." already exist. Please choose another one. <br /><a href=template_folder>Please Click here to dont lose your template.</a>";
	$_SESSION['TEMPLATE_SESSION'] = $templatebody;
	};
?>

<br /><br /><a href="index.php">RETURN</a>