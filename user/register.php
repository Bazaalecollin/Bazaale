<!DOCTYPE html>
<html>

<?php require('sql-connection.php') ?>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>

	<?php include 'head.php'; ?>

    <main class="py-4">
        <div class="container">

        	<h2>Create an account</h2>
        	<hr>

        	<form method="POST" action="save-members.php">
        		<div class="row">
        			<div class="col-md-6">
        				<label>Name</label><br>
        				<input type="text" name="person_name" class="form-control" required>

        				<label>Password</label><br>
        				<input type="text" name="password" class="form-control" required>

        				<label>Email_Address</label><br>
        				<input type="email" name="email_address" class="form-control" required>

        				<!-- read districts -->

        				<?php 

        				$results = $sql_connection->query("SELECT ID, NAME FROM districts ORDER BY ID ASC");
        				 ?>

        				<label>District</label><br>
        				<select class="form-control" name="district_id">

        					<?php 

        					foreach ($results as $key => $value) {

	                           $id = $value["ID"];
	                           $name = $value["NAME"];

	                           echo "
	                           <option value='$id'>$name</option>";

	                        }


        					 ?>

        				</select>

        				<br>

        				<label>Password</label><br>
        				<input type="password" name="member_password" class="form-control" required>

        				<label>Confirm Password</label><br>
        				<input type="password" name="confirm_member_password" class="form-control" required>

        				<hr>


        				<button type="submit" class="btn btn-success">Register</button>

        			</div>
        		</div>
        	</form>

        </div>
    </main>

</body>
</html> 