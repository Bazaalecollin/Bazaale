<?php 

header("content-type:text/plane");

$phone_number=$_POST['phoneNumber'];

$textFromUser =$_POST['text'];

$sessionID = $_POST['sessionID'];

$serviceCode = $_POST['serviceCode'];

$inputArray = explode("*", $textFromUser);


if (empty($textFromUser)) {
	
	$response = " CON  Welcome to the Archives Limited";

	$response .= "\n 1. Register";

	$response .= "\n 2. Add a city";

    echo $response;

}else{

	echo " END  we have" .$textFromUser;
}