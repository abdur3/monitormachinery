<?php

$conn = mysql_connect("".MYSQL_HOST."", "".MYSQL_USER."", "".MYSQL_PASS."")or die("can't connect");;
$db_selected=mysql_select_db("".MYSQL_DB."",$conn)or die("can't select db");;
?><?
$result = mysql_query("SELECT * FROM tab_408controlview");
$ev = mysql_num_rows($result);
$query="SELECT * FROM tab_408controlview where id='$ev'";
$result1=mysql_query($query);
while($row=mysql_fetch_array($result1))
{
echo $row["command"]."#";
}
?>