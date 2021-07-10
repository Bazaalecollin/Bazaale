<!DOCTYPE html>
<html>

<?php require('sql-connection.php') ?>
<head>
	<meta charset="utf-8">
	<title>Users</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>

	<?php include 'head.php'; 

	  $trees = $sql_connection->query("SELECT trees.ID,tree_types.NAME AS tree_types_name, members.ID AS members.id districts.NAME AS district_name FROM trees,districts,members,tree_types WHERE trees.DISTRICT_ID = districts.ID AND trees.MEMBER_ID = members.ID AND trees.TREE_TYPES =tree_types.ID");

	?>

    <main class="py-4">
        <div class="container">

        	<h2>Trees</h2>
        	<hr>

        	<table class="table table-striped table-hover">
        		<thead>
        			<th>ID</th>
        			<th>NAME</th>
        			<th>ID</th>
        			<th>DISTRICT</th>
        		</thead>

        		<tbody>     			
        			<?php 

        			  foreach($trees as $key => $value) {

        			  	$id= $value["TREES"];
        			  	$name = $value["tree_types_NAME"]
        			  	$id= $value["MEMBER_id"];
        			  	$district = $value["district_name"];

        			  	echo "
        			  	<tr>
        			  	  <td> $id</td>  
        			  	  <td>$name</td>  
        			  	  <td> $id</td>  
        			  	  <td> $district</td>  
        			  	</tr>
        			  	";


        			  }

        			 ?>
        		</tbody>
        	</table>


        </div>

    </main>
</body>
</html>