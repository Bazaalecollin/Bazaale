<?php
require('sql-connection.php');
	
if (!isset($_POST['tree_types_name'])) {
	echo "Name doesnot exist";
	exit();
}

$t_name = $_POST['tree_types_name'];

$sql_connection->query("INSERT INTO tree_types(NAME)VALUES('$t_name')");

header("Location:tree_types.php");