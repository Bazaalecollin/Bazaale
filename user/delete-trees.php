<?php 
require('sql-connection.php');

if (!isset($_GET['trees_id'])) {
	echo "No tree_types specified";

	exit();
}
$trees_id =
$sql_connection->query("DELETE from trees where id = $trees_id");