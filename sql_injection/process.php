<?php 
$username=$_GET['user'];


mysql_connect('localhost','root','');
mysql_select_db('sql_injection');

$result=mysql_query("select * from store_db where username=".$username)
		or die("Failed to query database");

while($row=mysql_fetch_array($result)){
	echo print_r($row);
}
?>