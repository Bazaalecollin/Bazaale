<?php 

$sqliCon = new mysqli("localhost","root","","USSD");

$sqliCon->query("CREATE TABLE IF DOESNOT EXIST worker(id int(15) not null auto_increment, primary key(id),phone_number varchar(20)not null unique,name varchar(23)not null)");