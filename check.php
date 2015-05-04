<?php
include("connect.php");


if ($_POST["pass"]=="dream"){


$query=mysql_query("SELECT * FROM DONATOR");
$cont=0;
while($array=mysql_fetch_array($query)){
$cont++;
echo $cont."- ".$array['NAME'];
echo "<br />";
};
} else {
?>


<form method="post" action="check.php">
<input type="password" name="pass">
<br>
<input type="submit" value="get in">
</form>

<?php };?>