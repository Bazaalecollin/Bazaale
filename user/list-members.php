<!DOCTYPE html>
<html>

<?php require('sql-connection.php') ?>
<head>
	<meta charset="utf-8">
	<title>Members</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>

	<?php include 'head.php'; 

	  $members = $sql_connection->query("SELECT members.ID,members.NAME,members.PASSWORD,members.EMAIL_ADDRESS,districts.NAME AS district_name FROM members,districts WHERE members.DISTRICT_ID = districts.ID");

	?>

    <main class="py-4">
        <div class="container">

        	<h2>List the members</h2>
        	<hr>

        	<table class="table table-striped table-hover">
        		<thead>
        			<th>ID</th>
        			<th>NAME</th>
        			<th>PASSWORD</th>
        			<th>EMAIL</th>
        			<th>DISTRICT</th>
        		</thead>

        		<tbody>     			
        			
        		</tbody>
        	</table>


        </div>

    </main>
</body>
</html>