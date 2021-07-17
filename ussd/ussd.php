<?php 

header("content-type:text/plane");


$phone_number=$_POST['phoneNumber'];

$textFromUser =$_POST['text'];

$sessionID = $_POST['sessionID'];

$serviceCode = $_POST['serviceCode'];

if (empty($textFromUser)) {
	$textFromUser ="0";
}else{
	$textFromUser= "0".$textFromUser;
}

$inputArray = explode("*", $textFromUser);

$level = count($inputArray);

switch ($level) {
	case 1:
	  $response = "CON Welcome to Archives Limited";

	  $response  .= "\n 1. Register";

	  $response .= "\n 2. add city";

	  echo $response ;

		break;

	case 2:

	   if ($inputArray[1] -- 1) {//wants to register//
         echo "CON provide ID_number";
	   	
	   }elseif ($inputArray[1] -- 2) {//wants to add a city
	   	
	   }else{
	   	echo "END inalid";
	   }

	   echo "CON AT INDEX 0=".$inputArray[0]."\n INDEX 1 =".$inputArray[1];

		
		break;

	case 3:	
	
	default:
		echo "The option is not valid";
		break;
}













