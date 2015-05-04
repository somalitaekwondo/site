<html>
<head>
	<title>Php</title>
</head>
<body>

	<?
	$connection = mysql_connect("localhost/bkp/somalitaekowndo");
	$db = "library";
	mysql_select_db($db, $connection) or die("Could not open $bd");

	$sql = "SELECT * FROM books WHERE available = 1 ORDER BY title";

	$result = mysql_query($sql, $connection) or die("Could not execut sql: $sql");
	$num_result = musql_num_rows($result);

	?>


	<table cellSpacing="2" cellPadding="6" align="center" border="1">

  <tr>
    <td colspan="7">
      <h3 align="center">These Books are currently available</h3>
    </td>
</tr>
  <tr>
    <td align="center">Title</td>
    <td align="center">Publisher</td>
    <td align="center">Category</td>
    <td align="center">ISBN</td>
</tr> <?
for ($i=0; $i < $num_result; $i++) {
    $row = mysql_fetch_array($result);
    $id = $row["bookid"];
    echo "<tr>";
      echo "<td>";
      echo stripslashes($row["title"]);
      echo "</td><td>";
      if ( !$row["company"] )
            {
          echo "&nbsp;";
          } else {
          echo $row["company"];
      }
      echo "</td><td>";
      echo $row["typedesc"];
      echo "</td><td>";
      echo $row["isbn"];
      echo "</td>";
    echo "</tr>";
}
?> </table>
</body>
</html>