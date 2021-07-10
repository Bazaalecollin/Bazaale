<?php 
require('sql-connection.php');

if (!isset($_GET['districts_id'])) {
	echo "No district specified";

	exit();
}
$districts_id =
$sql_connection->query("DELETE from districts where id = $districts_id");