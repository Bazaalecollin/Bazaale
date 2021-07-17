<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Records</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>

	<?php include 'head.php'; ?>


        <main class="py-4">
            <div class="container">

            	<h2>Villages</h2>
            	<hr>

            	<form method="POST" action="save-village.php">

            		<div class="row">
            			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">

            				<label>Name</label><br>
            				<input type="text" name="village_name" class="form-control">
            				<hr>
            				<button type="submit" class="btn btn-success">Save village</button>

            			</div>
            			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">

            			</div>
            		</div>            		

            	</form>

            	<hr>

            	<table class="table">
            		<thead>
            			<th>ID</th> <th>Name</th>
            		</thead>

            		<tbody>
            			 <?php require('read-village.php') ?>
            		</tbody>
            	</table>


            </div>
        </main>

    </body>
</html>