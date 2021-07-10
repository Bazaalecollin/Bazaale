<?php

$host ="localhost";
$username ="root";
$password ="";

$mysqli_connection = new mysqli("localhost","root","");

$mysqli_connection->query("CREATE DATABASE internship");

mysqli_select_db($mysqli_connection,'internship');

$table_string =$mysqli_connection->query ("CREATE TABLE users(ID INT(11) NOT NULL auto_increment,PRIMARY KEY(ID),NAME VARCHAR(50)NOT NULL, PHONE_NUMBER VARCHAR(20)NOT NULL UNIQUE)");

$insert=$mysqli_connection->query("INSERT INTO users(NAME,PHONE_NUMBER)VALUES('COLLIN','0784913692')");

if ($insert) echo "inserted successfully"; 

else echo $mysqli_connection->error;



