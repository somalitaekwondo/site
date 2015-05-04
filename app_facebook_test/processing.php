<?php
session_start();
ob_start();
require ("smtp/class.phpmailer.php");

/*----------------------------------------
Connexion Data Base
------------------------------------------*/

$host = "mysql.somalitaekwondo.com";
$user = "somali"; 
$pass = "!d1k2t!2013";
$database = "somali"; 

$connection = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($database);
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');


if($_SESSION['IDPROCESSING']==""){/************validate page access*************************/
header('Location: idprocessing.php');
}else{
$idprocessing = $_SESSION['IDPROCESSING'];
};/*****************validate page access end**************************/





if($idprocessing=="register"){ /*******  BEGIN REGISTER PAGE ************/

/*-> strings 

name="NAME"
name="SURNAME"
name="BIRTHDAY"
name="ADDRESS"
name="NUMBER"
name="ZIPCODE"
name="CITY"
name="STATE"
name="COUNTRY" 
name="EMAIL"
name="PASSWORD"

*/

$name = $_SESSION['NAME'];
$surname = $_SESSION['SURNAME'];
$birthday = $_SESSION['BIRTHDAY'];
$address = $_SESSION['ADDRESS'];
$number = $_SESSION['NUMBER'];
$zipcode = $_SESSION['ZIPCODE'];
$city = $_SESSION['CITY'];
$state = $_SESSION['STATE'];
$country = $_SESSION['COUNTRY'];
$email = $_SESSION['EMAIL'];
$password = $_SESSION['PASSWORD'];

$query_email = mysql_query("SELECT * FROM DONATOR WHERE EMAIL LIKE '$email'");
	
	if(!mysql_fetch_array($query_email)){
	/**THE EMAIL IS VALID**/
	
	$query_register=mysql_query("INSERT INTO DONATOR (NAME, SURNAME, BIRTHDAY, ADDRESS, NUMBER, ZIPCODE, CITY, STATE, COUNTRY, EMAIL, PASSWORD) VALUES ('$name', '$surname', '$birthday', '$address', '$number', '$zipcode', '$city', '$state', '$country', '$email', '$password')");
	
		if($query_register){
		
		$mail = new PHPMailer();

$mail->Mailer = "smtp";
$mail->IsSMTP(); // mandar via SMTP
$mail->Host = "ssl://smtp.gmail.com"; // Seu servidor smtp
$mail->SMTPAuth = true; // smtp autenticado
$mail->Username = "noreplay@somalitaekwondo.com"; // usuário deste servidor smtp
$mail->Password = "!dark2727!"; // senha

$mail->From = "noreplay@somalitaekwondo.com";
$mail->FromName = "Somali Taekwondo";
$mail->AddAddress("$email","$name");

$mail->WordWrap = 50; // set word wrap
$mail->IsHTML(true); // send as HTML

$mail->Subject = "Somali Taekwondo - Welcome";

$mail->Body = "<font face=verdana color=black size=2>
<BR>
Dear <b> $name $surname</b>,<BR><BR>
Here are the details of your account:<BR><BR>
Email: <b><i>$email</i></b><BR>
Password: <b><i>$password</i></b><br><BR>
<BR><BR>
<BR><BR> 
The Somali Taekwondo National Team
In case of any doubt please do not hesitate to contact us.
 <BR><BR>
You are always welcome to send us your comments or requests to improve our services.
 <BR><BR>
We hope you enjoy your our website!
 <BR><BR><BR><BR>
</font><font size=1><i>
Best regards,<BR>
Somali Taekwondo National Team!<BR>
somalitaekwondo.com<BR>
<img border=0 alt=Green Web Hosting! This site hosted by DreamHost.
src=https://secure.newdream.net/green1.gif height=32 width=100 /></a><br>";

$mail->AltBody = "somalitaekwondo.com";

if(!$mail->Send()){
echo "email fail - <BR><BR>";
echo "Erro: " . $mail->ErrorInfo;
exit;
};		
		
		echo "IT WORKS";
		
		}else die(mysql_error());
	
	}/**THE EMAIL IS NOT VALID**/
		
	else{
		
	echo "THE EMAIL IS NOT VALID - EMAIL ALREADY REGISTRED";
	};
		




}; /*************END OF REGISTER PAGE ***********/







if($idprocessing=="login"){ /*******  BEGIN LOGIN PAGE ************/

$email = $_SESSION['EMAIL_LOG'];
$password = $_SESSION['PASSWORD_LOG'];

$query=mysql_query("SELECT * FROM DONATOR WHERE EMAIL LIKE '$email' AND PASSWORD LIKE '$password'") or die (mysql_error());
	if($array=mysql_fetch_array($query)){
	$_SESSION['LOGGED'] = "YES";
	$_SESSION['NAMELOG'] = $array['NAME'];
	$_SESSION['NAME_DON'] = $array['NAME'];
	$_SESSION['SURNAME_DON'] = $array['SURNAME'];
	$_SESSION['EMAIL_DON'] = $array['EMAIL'];
	$_SESSION['ID_DONATOR'] = $array['ID_DONATOR'];
	
	
	//echo "Logado<br>";
	//echo $array['NAME'];
	if($_SESSION['PAGE']=="event"){
	header('Location: events');
	} else { header('Location: index'); 
	};
	
	}else {
	$_SESSION['LOGGED'] = "NO";
	echo "NAO LOGADO";
	
	if($_SESSION['PAGE']=="login"){
	header('Location: login');
	};
	if($_SESSION['PAGE']=="event"){
	header('Location: events');
	};
    
    if(($_SESSION['PAGE']!="login") and ($_SESSION['PAGE']!="event")){
	header('Location: index');
	};	
	
		
	
	};
echo $_SESSION['PAGE'];
	}; /*********END OF LOGIN PAGE****************/






if($idprocessing=="LOGOUT"){ /*******  DISCONNECT PAGE ************/
$_SESSION['LOGGED']="";
$_SESSION['EMAIL_LOG']="";
$_SESSION['PASSWORD_LOG']="";
$_SESSION['NAME_DON'] = "";
$_SESSION['SURNAME_DON'] = "";
$_SESSION['EMAIL_DON'] = "";
header('Location: index');
echo "Disconnect";
}; /**********END OF DISCONNECT PAGE*************/




if($idprocessing=="SENDMAILCONTACT"){ /*******  SEND MAIL CONTACT PAGE ************/

$name=$_SESSION['NAME_CONTACT'];
$email=$_SESSION['EMAIL_CONTACT'];
$subject=$_SESSION['SUBJECT_CONTACT'];
$message=$_SESSION['MESSAGE_CONTACT'];

$mail = new PHPMailer();

$mail->Mailer = "smtp";
$mail->IsSMTP(); // mandar via SMTP
$mail->Host = "ssl://smtp.gmail.com"; // Seu servidor smtp
$mail->SMTPAuth = true; // smtp autenticado
$mail->Username = "noreplay@somalitaekwondo.com"; // usuário deste servidor smtp
$mail->Password = "!dark2727!"; // senha

$mail->From = $email;
$mail->FromName = $name;
$mail->AddAddress("contact@somalitaekwondo.com","Contact Somali");

$mail->WordWrap = 50; // set word wrap
$mail->IsHTML(true); // send as HTML

$mail->Subject = $subject;

$mail->Body = $message;


$mail->AltBody = "somalitaekwondo.com";

if(!$mail->Send()){
echo "email fail - <BR><BR>";
echo "Erro: " . $mail->ErrorInfo;
exit;
}else{
$_SESSION[] = 
header('Location: contact?sent=sent');
};



};



if($idprocessing=="DON"){ /*******  DONATION PAGE ************/
$value = $_SESSION['VALUEDON'];
$name = $_SESSION['NAME_DON'];
$surname = $_SESSION['SURNAME_DON'];
$email = $_SESSION['EMAIL_DON'];
$iddonator = $_SESSION['ID_DONATOR'];
$idevent = $_SESSION['ID_EVENT'];
$date = date("F j, Y, g:i a");
$total=$_SESSION['DONATED'] + $value;
/*
ID_EVENT
ID_DONATOR
VALUE
DATE
*/

/*CODIGO SQL PRA INSERIR NO BANCO DE DADOS A DOAçÃO - PRA FAZER !!!*/
$query_donation=mysql_query("INSERT INTO DONATIONS (ID_EVENT, ID_DONATOR, VALUE, DATE) VALUES ('$idevent', '$iddonator', '$value', '$date')");
$query_event=mysql_query("UPDATE EVENT SET EVENT_BUDGET_DONATED='$total'");
if(($query_donation) and ($query_event)){

$mail = new PHPMailer();

$mail->Mailer = "smtp";
$mail->IsSMTP(); // mandar via SMTP
$mail->Host = "ssl://smtp.gmail.com"; // Seu servidor smtp
$mail->SMTPAuth = true; // smtp autenticado
$mail->Username = "noreplay@somalitaekwondo.com"; // usuário deste servidor smtp
$mail->Password = "!dark2727!"; // senha

$mail->From = "info@somalitaekwondo.com";
$mail->FromName = "Somali Taekwondo National Team";
$mail->AddAddress($email,"Somali Taekwondo National Team");

$mail->WordWrap = 50; // set word wrap
$mail->IsHTML(true); // send as HTML

$mail->Subject = " Somali want to Thank you !! ";

$mail->Body = "<font face=verdana color=black size=2>
<BR>

Dear<br>
$name $surname,<br><br>

On behalf of Somali Taekwondo National Team, I would like to thank you for your generous donation.<br>
Your contribution makes it possible for us to help Somali grow through sport.<br>
Since its inception in 2012, Somali Taekwondo National Team promote a better image of Somali and helping the country climb out of poverty.<br>
This year,we have been selecting athlete to compete at African Championship, World Championships, and of course the Olympic Games.<br>
This is only possible because of thoughtful contributions from people like you.<br><br>

Somali Taekwondo use funds provided from donations of people from all around the world to promote Somali image, giving an  assistance to the sport, <br>
focusing on improving opportunities for the somalian athletes participate in many tournament, giving a hope for the country.<br>
As you know, every donation will be indented  for the developing of each somalian athlete giving the oportunity to participate to every <br>
tournement recognized by the World Taekwondo Federation and the Somali Olympic Committee.<br><br>
 
<i>Please note that donations that exceed more than needed will be given to an ONG that helps against the somali poverty.</i><br><br>

<b>We hope for your continued support in the future.</b><br><br>

Please keep this written acknowledgement of your donation for your tax records.<br>
Once again, thank you for your generous donation.<br><br>
Sincerely<br><br><br>

Elton de Souza Moreira <br>
Coach and Manager<br>
Somali Taekwondo National Team<br>

";


$mail->AltBody = "somalitaekwondo.com";

if(!$mail->Send()){
echo "email fail - <BR><BR>";
echo "Erro: " . $mail->ErrorInfo;
exit;
}else{
header('Location: thankyou?donation=done');
};



} else {echo "Something went wrong , please contact the send an email to contact@somalitaekwondo.com.";}; /*FIM DO IF INSERIU NO BANCO DE DADOS*/


};




?>