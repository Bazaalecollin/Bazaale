<?php 

header("content-type:text/plane");


$phone_number=$_POST['phoneNumber'];

$textFromUser =$_POST['text'];

$sessionID = $_POST['sessionID'];

$serviceCode = $_POST['serviceCode'];


$inputArray = explode("*", $textFromUser);

$level = count($inputArray);

switch ($level) {
	case 0:
	  $response = "CON Welcome to Archives Limited";

	  $response  .= "\n 1. Register";

	  $response .= "\n 2. add city";

	  echo $response ;

		break;

	case 1:
		
		break;

	case 2:	
	
	default:
		echo "The option is not valid";
		break;
}













