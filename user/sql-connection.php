<?php

$sql_connection = new mysqli("localhost","root","","climate");

$sql_connection->query("CREATE TABLE  IF NOT EXISTS districts(ID INT(11) NOT NULL AUTO_INCREMENT,PRIMARY KEY(ID),NAME VARCHAR(12)NOT NULL UNIQUE)");

$sql_connection->query("CREATE TABLE IF NOT EXISTS tree_types(ID INT(12)NOT NULL, PRIMARY KEY(ID),DESCRIPTION VARCHAR(0)NULL,NAME VARCHAR(30)NOT NULL UNIQUE)");

$sql_connection->query("CREATE TABLE IF NOT EXISTS trees(ID INT(12)NOT NULL,PRIMARY KEY(ID),members_ID INT(12)NOT NULL,tree_types_ID INT (12)NOT NULL,districts_ID INT(12)NOT NULL, number_of_trees INT(30)NOT NULL, date_of_recorded DATE NOT NULL, FOREIGN KEY(members_ID) REFERENCES members(ID),FOREIGN KEY(tree_types_ID) REFERENCES tree_types(ID),FOREIGN KEY (districts_ID) REFERENCES districts(ID))");

 $sql_connection->query("CREATE TABLE IF NOT EXISTS members(NAME VARCHAR(20)NOT NULL,EMAIL_ADDRESS VARCHAR(25)NOT NULL UNIQUE,PASSWORD VARCHAR(30)NOT NULL, ID INT(12)NOT NULL,districts_ID INT(11)NOT NULL, FOREIGN KEY(districts_ID) REFERENCES districts(ID))");
 
