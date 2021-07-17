<!DOCTYPE html>
<?php
require('sql-connection.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Update district</title>
</head>
<body>

	<?php
	  $district_id = $_GET['district_id'];

	  $this_district = $connection->query("SELECT * FROM districts WHERE ID = $districts_id "); 

	  $record = $this_district->fetch_assoc();
	 ?>

	<form method="POST" action="update_district_data.php">

		<label>Name: </label>
		<input type="text" value="<?php echo $record['NAME'] ?>" name="name_of_district">
		<br> 
		<input type="text" name="districts_id" value="<?php echo $districts_id ?>">
		<hr>

		<button type="submit">Save changes</button>
	</form>

</body>
</html> 