<!DOCTYPE html>
<?php
require('sql-connection.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Update member</title>
</head>
<body>

	<?php
	  $members_id = $_GET['members_id'];

	  $this_members = $connection->query("SELECT * FROM members "); 

	  $record = $this_member->fetch_assoc();
	 ?>

	<form method="POST" action="update-members.php">

		<label>Name: </label>
		<input type="text" value="<?php echo $record['NAME'] ?>" name="name_of_member">
		<br> 
		<label>Password: </label>
		<input type="hidden" value="<?php echo $record['PASSWORD'] ?>" name="password_of_members">

		<input type="hidden" name="members_id" value="<?php echo $members_id ?>">
		<hr>

		<button type="submit">Save changes</button>
	</form>

</body>
</html> 