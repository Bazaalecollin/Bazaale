<?php 

$sqliCon = new mysqli("localhost","root","");


$sqliCon ->query ("CREATE TABLE worker(ID INT(11) NOT NULL auto_increment,PRIMARY KEY(ID),NAME VARCHAR(50)NOT NULL, PHONE_NUMBER VARCHAR(20)NOT NULL UNIQUE)");

