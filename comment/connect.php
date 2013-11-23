<?php

$db_host="localhost";
$db_username="root";
$db_pass="";
$db_name="comment_system";

$db_connection = mysql_connect($db_host, $db_username, $db_pass, $db_name) or die(mysql_error());
mysql_select_db($db_name) or die(mysql_error()); 
?>