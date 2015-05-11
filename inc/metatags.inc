<?php
 function curPageURL()
 {
    $pageURL = 'http';

    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}

    $pageURL .= "://";

    if ($_SERVER["SERVER_PORT"] != "80") {

       $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];

    } else {

        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

    }
    return $pageURL;
}
?>
<!-- metatags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<meta name="robots" content="noodp,noydir" />
<meta name="msvalidate.01" content="3A0ACE0E732274189D96D7B368462AF7" />

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="author" href="https://www.facebook.com/lexcode/"/>
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/main.css">

<!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->