<?php
require('sql-connection.php');
	


$d_name = $_POST['district_name'];

$sql_connection->query("INSERT INTO districts(NAME)VALUES('$d_name')");

header("Location:districts.php");