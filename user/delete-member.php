<?php 
require('sql-connection.php');

if (!isset($_GET['member_id'])) {
	echo "No members specified";

	exit();
}
$member_id =
$sql_connection->query("DELETE from members where id = $member_id");