<?php 

header("content-type:text/plane");


$phone_number=$_POST['phoneNumber'];

$textFromUser =$_POST['text'];

$sessionID = $_POST['sessionID'];

$serviceCode = $_POST['serviceCode'];

if (empty($textFromUser)) {
	$textFromUser= "0";
}else{
	$textFromUser = "0", $textFromUser;
}



