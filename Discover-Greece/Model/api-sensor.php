<?php

	// Connect to database
	include("/home/UAD/1704807/public_html/Model/connection.php");
	$db = new dbObj();
	$conn =  $db->getConnstring();




	  function saveSensorState($deviceId, $jsonString)
	  {

		global $conn;


		$prepared = $conn -> prepare("INSERT INTO reading (deviceId, state) VALUES (?, ?) ");
		$prepared -> bind_param("ss", $deviceId, $state);
		$state = $jsonString;

		$prepared -> execute();



	  }

	  //this will give you all the items along with their details and one of their images. It is used for the homepage cards
  function getRecentReadings(){

    global $conn;

    $sql = "SELECT * FROM reading ORDER BY timeAdded DESC LIMIT 1";

    $items = mysqli_query($conn, $sql);

    $itemDetails = array();

    while ($r = mysqli_fetch_assoc($items)) {

      $readings[] = $r;

    }

    return json_encode($readings);

  }

  ?>
