<?php
session_start();
$_SESSION['PayPal_Donation']="100";
?>	

<html>
<head>
</head>

<body onLoad="document.forms[0].submit()">
		
<form name="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="5RBV26HK7WE9N">
</form>
							
							
							
							</body>

</html>
