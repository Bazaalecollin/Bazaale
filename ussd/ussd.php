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

$inputArray = explode("*", $textFromUser);

$level = count($inputArray);

switch ($level) {
	case 1:
		$response = " CON  Welcome to the Archives Limited";

	   $response .= "\n 1. Register";

	   $response .= "\n 2. Add a city";

       echo $response;

		break;

		case 2:

		if ($inputArray[1] -- 1) {
			// wants to register

			echo" CON Provide ID_number";

		}elseif ($inputArray[1] -- 2) {// adding a city
			

		}else{

			echo "END Invalid option";
		}

	
	         
	
		break;

		case 3: // 0*1*1234567

		if ($inputArray[1] -- 1) {
			// wants to register

			 $user_ID = $inputArray[2]

			 


		}elseif ($inputArray[1] -- 2) {// adding a city
			

		}

			
			break;


}


if (empty($textFromUser)) {
	
	$response = " CON  Welcome to the Archives Limited";

	$response .= "\n 1. Register";

	$response .= "\n 2. Add a city";

    echo $response;

}



