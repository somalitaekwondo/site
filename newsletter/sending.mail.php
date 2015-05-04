<?php
session_start();
ob_start(); 
include ('connect.php');

	if(($_SESSION['LOGIN'] == "NO") or (!$_SESSION['LOGIN'])) header('Location: index.php');
	
require ("smtp/class.phpmailer.php");

$message = $_POST['message'];
$subject = $_POST['subject'];
$id_group_newsletter = $_POST['group'];

if($id_group_newsletter == "all"){
$query=mysql_query("SELECT * FROM  MAIL_NEWSLETTER WHERE DELETED LIKE 'NO' ");

} else {
		
		$query=mysql_query("SELECT * FROM  MAIL_NEWSLETTER WHERE ID_GROUP_NEWSLETTER LIKE '$id_group_newsletter' AND DELETED LIKE 'NO' ");

		};

while($array=mysql_fetch_array($query)){

$email = $array['MAIL_NEWSLETTER'];
$name = $array['NAME_NEWSLETTER'];

if($_POST['img'] != "NO" ){
$imgname = $_POST['img'];
$img = "img/".$imgname;
$imageattach="YES";
};
	$mail = new PHPMailer();

	$mail->Mailer = "smtp";
	$mail->IsSMTP(); // mandar via SMTP
	$mail->Host = "ssl://smtp.gmail.com"; // Seu servidor smtp
	$mail->SMTPAuth = true; // smtp autenticado
	$mail->Username = "noreplay@somalitaekwondo.com"; // usuário deste servidor smtp
	$mail->Password = "!dark2727!"; // senha
	
	
	if($imageattach=="YES"){
	$mail->AddAttachment($img);
	$mail->AddEmbeddedImage($img, "my-attach", $imgname); 
	
	};
	
	$mail->From = "noreplay@somalitaekwondo.com";
	$mail->FromName = "Somali Taekwondo News";
	$mail->AddAddress("$email","$name");	

	$mail->WordWrap = 989; // set word wrap
	$mail->IsHTML(true); // send as HTML

	$mail->Subject = $subject;

	$mail->Body = $message;

	$mail->AltBody = "somalitaekwondo.com";

		if(!$mail->Send()){
		echo "email fail - <BR><BR>";
		echo "Erro: " . $mail->ErrorInfo;
		exit;
		};
		echo "Email sent to: ".$email." with success !! <br />";
};
echo "<br /><br /><a href='index'>Go back to Index</a>"

?>