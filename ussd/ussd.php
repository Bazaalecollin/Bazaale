<?php 

header("content-type:text/plane");


$phone_number=$_POST['phoneNumber'];

$textFromUser =$_POST['text'];

$sessionID = $_POST['sessionID'];

$serviceCode = $_POST['serviceCode'];


$inputArray = explode("*", $textFromUser);

if (empty($textFromUser)) {
	
	$response = "CON W elcome to Archives Limited";

	$response.="\n 1. Register";

	$response.="\n 2. add city";
}else{
	echo "END we have", $textFromUser;
}



