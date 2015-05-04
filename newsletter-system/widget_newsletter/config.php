<?php
define("_DB_NAME","somali_newsletter");
define("_DB_USER","somali");
define("_DB_PASS","!d1k2t!2013");
define("_DB_SERVER","mysql.somalitaekwondo.com");
define("_TEMPLATE_DIR","templates/");
define("_NEWSLETTERS_DIR","newsletters/");
define("_IMAGES_DIR","images/");
define("_MAIL_SMTP",true); 
define("_MAIL_SMTP_HOST","smtp.gmail.com"); 
define("_MAIL_SMTP_AUTH",true); 
define("_MAIL_SMTP_USER","contact@somalitaekwondo.com"); 
define("_MAIL_SMTP_PASS","!dark2727!"); 


define("_DEBUG_MODE",true);
define("_DEMO_MODE",false);
ini_set("display_errors",_DEBUG_MODE);

// date format for printing dates to the screen (uses php date syntax)
define("_DATE_FORMAT","d/m/Y"); 
// date format for inputting dates into the system
// 1 = DD/MM/YYYY
// 2 = YYYY/MM/DD
// 3 = MM/DD/YYYY
define("_DATE_INPUT",1); 
switch(_DATE_INPUT){
	case 1: define('_DATE_INPUT_HELP','DD/MM/YYYY'); break;
	case 2: define('_DATE_INPUT_HELP','YYYY/MM/DD'); break;
	case 3: define('_DATE_INPUT_HELP','MM/DD/YYYY'); break;
}
?>