<?php

	// Connect to database
	include("connection.php");
	$db = new dbObj();
	$conn =  $db->getConnstring();

  createUser($jsonText){

  	global $conn;
		$userDets = json_decode($jsonText);

		$prepared = $conn -> prepare("INSERT INTO users (userName, userpass) VALUES (?, ?) ");
		$prepared -> bind_param("ss", $userNanme, $userPass);
		$userName = $userDets -> userName;
		$userPass = $userDets -> userPass;

		$prepared -> execute();

  }

	function getUser($jsonText){

		global $conn;
		$userId = json_decode($jsonText);

		$prepared = $conn -> prepare("SELECT * FROM users where userName = ? and userPass = ?");
		$prepared -> bind_param("ss", $userNanme, $userPass);
		$userName = $userDets -> userName;
		$userPass = $userDets -> userPass;

		$prepared -> execute();
		$result = $prepared ->get_result();
		$resultArray = $result ->fetch_array();
		return json_encode($resultArray);

		//to do: get result




	}



  ?>
