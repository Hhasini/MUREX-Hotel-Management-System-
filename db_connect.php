<?php
    $mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mtsql_db="murex";

if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mtsql_db)){
	die(mysql_error());
} 
?>