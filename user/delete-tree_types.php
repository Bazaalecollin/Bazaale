<?php 
require('sql-connection.php');

if (!isset($_GET['tree_types_id'])) {
	echo "No tree_types specified";

	exit();
}
$tree_types_id =
$sql_connection->query("DELETE from tree_types where id = $tree_types_id");