<?php
$link = mysql_connect('localhost', 'root', '');
mysql_select_db('crime', $link);

$sql = mysql_query("SELECT * FROM stations");
while($row=mysql_fetch_array($sql))
{
	$id= $row['id'];
	$name = $row['name'];
	$name = str_replace("\n","",$name); 

	mysql_query("update stations set name='$name' where id='$id'");
}
?>