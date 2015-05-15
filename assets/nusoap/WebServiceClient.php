<html>
<head>
	<title>ThaiCreate.Com</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<?php
	require_once("lib/nusoap.php");
	
	// $client = new nusoap_client("https://ws.up.ac.th/mobile/ClassRoomService.asmx?WSDL", true); 
	
	// $params = array(
	// 	'username' => "yeunyong.ka"
	// 	);
	// $data = $client->call("GetStaffInfoResponse", $params);

	// print_r($data);
	// 
	// $data = $client->call("HelloWorld", $params); 
	// echo $data;

	//$wsdl = "https://ws.up.ac.th/mobile/AuthenService.asmx?WSDL";
	$user = base64_encode("yeunyong.ka");
	$pass = base64_encode("1qazxsw2");

	$method = "Login";
	$soapaction = "http://tempuri.org/Login";
	$body = '<Login xmlns="http://tempuri.org/">';
	$body .= '<username>'.$user.'</username>';
	$body .= '<password>'.$pass.'</password>';
	$body .= '<ProductName>decaffair_student</ProductName>';
	$body .= '</Login>';
	
	$client = new nusoap_client("https://ws.up.ac.th/mobile/AuthenService.asmx?WSDL", true); 
	//$client = new nusoap_client($wsdl);
                                                                                        //$client = new nusoap_client($wsdl);
	$client->decode_utf8 = false;
	$mysoapmsg = $client->serializeEnvelope($body,'',array(),'document','literal');	
	$response = @$client->send($mysoapmsg,$soapaction);
	$result = $response['LoginResult'];
	$SID = $result;
	print($SID);
	//$this->session->set_userdata('SID', $SID);

	//$wsdl = "https://ws.up.ac.th/mobile/StaffService.asmx?WSDL";
	$method = "GetStaffInfo";
	$soapaction = "http://tempuri.org/GetStaffInfo";
	$body = '<GetStaffInfo   xmlns="http://tempuri.org/">';
	$body .= '<sessionID>'.$SID.'</sessionID>';
	$body .= '</GetStaffInfo >';

	$client = new nusoap_client("https://ws.up.ac.th/mobile/StaffService.asmx?WSDL", true); 
	$client->decode_utf8 = false;
	$mysoapmsg=$client->serializeEnvelope($body,'',array(),'document','literal');	
	$response=@$client->send($mysoapmsg,$soapaction);
	$result = $response['GetStaffInfoResult'];
	var_dump($result);


	//echo $result['Title'];
	//echo $result['FirstName_TH'];
	

	?>
</body>
</html>