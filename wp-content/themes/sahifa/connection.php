<?php
$mysql_hostname = "localhost";
$mysql_user = "wordpress";
$mysql_password = "123456";
$mysql_database = "wordpress";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_set_charset('utf8',$bd);
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>