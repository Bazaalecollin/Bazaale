<?php 

$sqliCon = new mysqli("localhost","root","");

$sqliCon->query("CREATE DATABASE IF DOESNOT EXIST USSD");

mysqli_select_db($sqliCon,"USSD");

$sqliCon->query("CREATE TABLE IF DOESNOT EXIST residents(id int(12) not null auto_increment,primary key(id),phone_number varchar(20)not null unique, name varchar(30)not null)");



