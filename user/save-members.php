<?php

require('sql-connection.php');

$Name = $_POST['name'];

$emailAddress = $_POST['email_address'];

$district = $_POST['district_id'];

$member_password = md5($_POST['member_password']);

$confirm_member_password = md5($_POST['confirm_member_password']);



$sql_connection->query("INSERT INTO members(NAME,EMAIL_ADDRESS,PASSWORD,DISTRICT_ID,)VALUES('$pName','$emailAddress','$member_password','$district')");  


header("Location:list-members.php");