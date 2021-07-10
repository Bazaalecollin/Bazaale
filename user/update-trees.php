<!DOCTYPE html>
<?php
require('sql-connection.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Update trees</title>
</head>
<body>

	<?php
	  $user_id = $_GET['trees_id'];

	  $this_user = $connection->query("SELECT * FROM trees WHERE ID = $trees_id "); 

	  $record = $this_tree->fetch_assoc();
	 ?>

	<form method="POST" action="update_user_data.php">

		<input type="text" name="trees_id" value="<?php echo $trees_id ?>">

		<input type="hidden" name="members_id" value="<?php echo $members_id ?>">

		<input type="text" name="tree_types_id" value="<?php echo $tree_types_id ?>">

		<input type="text" name="districts_id" value="<?php echo $districts_id ?>">

		<label>Number_of_trees: </label>
		<input type="text" value="<?php echo $record['Number_of_trees'] ?>" name="number_of_trees">
		<br> 
		<label>Date_of_recorded: </label>
		<input type="text" value="<?php echo $record['DATE_OF_RECORDED'] ?>" name="date_of_recorded">

		<input type="hidden" name="members_id" value="<?php echo $members_id ?>">
		<hr>

		<button type="submit">Save changes</button>
	</form>

</body>
</html> 