<?php
session_start();

$toprocess = $_POST['TOPROCESS'];

if($toprocess=="reg"){
$_SESSION['IDPROCESSING'] = "register";
$_SESSION['NAME'] = $_POST['NAME'];
$_SESSION['SURNAME'] = $_POST['SURNAME'];
$_SESSION['BIRTHDAY'] = $_POST['BIRTHDAY'];
$_SESSION['ADDRESS'] = $_POST['ADDRESS'];
$_SESSION['NUMBER'] = $_POST['NUMBER'];
$_SESSION['ZIPCODE'] = $_POST['ZIPCODE'];
$_SESSION['CITY'] = $_POST['CITY'];
$_SESSION['STATE'] = $_POST['STATE'];
$_SESSION['COUNTRY'] = $_POST['COUNTRY'];
$_SESSION['EMAIL'] = $_POST['EMAIL'];
$_SESSION['PASSWORD'] = $_POST['PASSWORD'];
header('Location: processing');
};

if($toprocess=="log"){
$_SESSION['IDPROCESSING'] = "login";
$_SESSION['EMAIL_LOG'] = $_POST['EMAIL'];
$_SESSION['PASSWORD_LOG'] = $_POST['PASSWORD'];
$_SESSION['PAGE'] = $_POST['PAGE']; 
header('Location: processing');

echo $_SESSION['EMAIL_LOG'];
echo $_SESSION['PASSWORD_LOG'];

};

if($_GET['disconnect']=="disconnect"){
$_SESSION['IDPROCESSING'] = "LOGOUT";
header('Location: processing');
};

if($toprocess=="sendmailcontact"){
$_SESSION['IDPROCESSING'] = "SENDMAILCONTACT";
$_SESSION['NAME_CONTACT'] = $_POST['name'];
$_SESSION['EMAIL_CONTACT'] = $_POST['email'];
$_SESSION['SUBJECT_CONTACT'] = $_POST['subject'];
$_SESSION['MESSAGE_CONTACT'] = $_POST['message'];
header('Location: processing');
};

if($_GET['toprocess']=="don"){
$_SESSION['VALUEDON'] = $_GET['don'];
$_SESSION['IDPROCESSING'] = "DON";
$_SESSION['ID_EVENT'] = $_GET['event'];
header('Location: processing');
};

echo "<b>500 Internal Server Error</b><br />
Sorry, something went wrong.<br /><br />

A team of highly trained Dromedary camels has been dispatched to deal with this situation.

";


?>