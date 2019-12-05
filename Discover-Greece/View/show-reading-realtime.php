<?php

// Connect to database
include("/home/UAD/1704807/public_html/Model/connection.php");
$db = new dbObj();
$conn =  $db->getConnstring();



include("/home/UAD/1704807/public_html/Model/api-sensor.php");

$json = getRecentReadings();

$decJon = json_decode($json);

$state = $decJon[0] -> state;

$state =  json_decode($state);

echo "internal: " . $state -> internal . " external: " . $state -> external . " light level: " . $state -> lightLevel . " voltage: " . $state -> voltage;

?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Last Meter Reads</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	</head>

<body>

<div data-role="page">
	<div data-role="header">
		<h1>Meter Reads</h1>
	</div>

	<div id="test"  data-role="content">
		<ul>
  <li> <?php echo "internal: " . $state -> internal ?></li>
  <li> <?php echo "external: " . $state -> external ?></li>
  <li> <?php echo "light level: " . $state -> lightLevel ?></li>
  <li> <?php echo "voltage: " . $state -> voltage ?></li>

</ul>
	</div>


</div>

<script src="../Controller/reading-scripts.js"></script>

</body>
</html>
