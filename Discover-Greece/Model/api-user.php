<?php

	// Connect to database
	include("/home/UAD/1704807/public_html/Model/connection.php");
	$db = new dbObj();
	$conn =  $db->getConnstring();

  function createUser($jsonText){

  	global $conn;
		$userDets = json_decode($jsonText);

		$prepared = $conn -> prepare("INSERT INTO users (userName, userPass, phoneNum) VALUES (?, ?, ?) ");
		$prepared -> bind_param("sss", $userName, $hashedPass, $phoneNum);
		$userName = $userDets -> userName;
		$phoneNum = $userDets -> phoneNum;
		$options =['cost' => 10];
		$hashedPass = password_hash($userDets -> userPass, PASSWORD_BCRYPT, $options);


		return $prepared -> execute();



  }

	function getUser($jsonText){

		global $conn;
		$userDets = json_decode($jsonText);
		$prepared = $conn -> prepare("SELECT * FROM users where userName = ?");
		$prepared -> bind_param("s", $userName);

		$userName = $userDets -> userName;
		$userPass = $userDets -> userPass;

		$prepared -> execute();
		$result = $prepared ->get_result();
		$result = $result -> fetch_assoc();
	//	echo $result['userPass'];

		return password_verify($userPass, $result['userPass']);




	}



  ?>
