<?php 

header("content-type:text/plane");

require('../AfricasTalkingGateway.php');

require('sql-connection.php');

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

	case 2:   //text - 0*1 OR 0*2

	   if ($inputArray[1] == 1) {//wants to register//

           echo "CON what is ID_number?";
	   	
	   }elseif ($inputArray[1] == 2) {//wants to add a city
	   	
	   }else{

	   	echo "END invalid option";
	   }

		
		break;

	case 3:	// 0*1*123456

	    if ($inputArray[1] == 1) {//wants to register//


           $user_ID = $inputArray[2];
         
            $saveResident = $sqliCon->query("INSERT INTO residents(id,phone_number)VALUES('$user_ID','$phone_number')");

           if($saveResident){

        	$message = "HI".$user_ID."THANK YOU";

            $apikey     = "8ca31226367ab4abde28fc34a62a2ef852d0e730b66c02348c98ed7499ca087c";

            $gateway    = new AfricasTalkingGateway("sandbox", $apikey,"sandbox");

            $gateway->sendMessage($phone_number, $message );
          }

          echo "END Thank you";


        }elseif ($inputArray[1] == 2) {//wants to add a city
	   	
	   }
	    
	default:
		echo "The option is not valid";
		break;
}













