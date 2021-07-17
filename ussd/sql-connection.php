<?php 

$sql_string = $mysqli_connection->query("CREATE DATABASE IF NOT EXISTS USSD");

if ($sql_string) {
	echo "created database";
}else {

	echo $mysqli_connection->error;
}