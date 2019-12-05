<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

// Connect to database
include("/home/UAD/1704807/public_html/Model/connection.php");
$db = new dbObj();
$conn =  $db->getConnstring();



include("/home/UAD/1704807/public_html/Model/api-sensor.php");

$json = getTenLastReadigs();

$decJon = json_decode($json);

$internal = array();
$external = array();
$lightLevel = array();
$voltage = array();


for ($i =0; $i < 10; $i++)
{

$state = $decJon[$i] -> state;
$state = json_decode($state);
array_push($internal, $state -> internal);
array_push($external, $state -> external);
array_push($lightLevel, $state -> lightLevel);
array_push($voltage, $state -> voltage);

}

echo min ($internal);
echo "\n";
echo min ($external);
echo "\n";
echo min ($lightLevel);
echo "\n";
echo min ($voltage);

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
<?php
for ($i =0; $i < 10; $i++)
{
  $state = $decJon[$i] -> state;
  $state = json_decode($state);
  echo '<div data-role="content">
		<ul>
      <li> ' . 'internal: ' .$state -> internal . '</li>
      <li>' . 'external: ' .$state -> external . ' </li>
      <li> ' . 'light level: ' .$state -> lightLevel . '</li>
      <li> ' . 'voltage: ' .$state -> voltage . '</li>
    </ul>
    	</div>';


}

?>


</div>

</body>
</html>
