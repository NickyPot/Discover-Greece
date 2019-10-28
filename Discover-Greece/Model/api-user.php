<?php

	// Connect to database
	include("connection.php");
	$db = new dbObj();
	$conn =  $db->getConnstring();

  function createUser($jsonText){

  	global $conn;
		$userDets = json_decode($jsonText);

		$prepared = $conn -> prepare("INSERT INTO users (userName, userPass) VALUES (?, ?) ");
		$prepared -> bind_param("ss", $userName, $userPass);
		$userName = $userDets -> userName;
		$userPass = $userDets -> userPass;

		$prepared -> execute();


  }

	function getUser($jsonText){

		global $conn;
		$userDets = json_decode($jsonText);

		$prepared = $conn -> prepare("SELECT * FROM users where userName = ? and userPass = ?");
		$prepared -> bind_param("ss", $userName, $userPass);
		$userName = $userDets -> userName;
		$userPass = $userDets -> userPass;

		$prepared -> execute();
		$result = $prepared ->get_result();
		$numofUsers = $result -> num_rows;
		return json_encode($numofUsers);





	}



  ?>
