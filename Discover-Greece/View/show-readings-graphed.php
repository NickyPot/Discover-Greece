<?php

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

	<div data-role="content">
	<?php
for ($i =0; $i < 10; $i++)
{
  $state = $decJon[$i] -> state;
  $state = json_decode($state);
  echo '
		<ul>
      <li> ' . 'internal: <b class ="internal"> ' .$state -> internal . '</b></li>
      <li>' . 'external: <b class ="external">' .$state -> external . ' </b></li>
      <li> ' . 'light level:<b class ="lightLevel"> ' .$state -> lightLevel . '</b></li>
      <li> ' . 'voltage: <b class ="voltage">' .$state -> voltage . '</b></li>
    </ul>
    	';


}

?>

	<div id ="chartContainer1" style="width: 45%; height: 300px;display: inline-block;">

	</div>

	<div id ="chartContainer2" style="width: 45%; height: 300px;display: inline-block;">

	</div>

	<div id ="chartContainer3" style="width: 45%; height: 300px;display: inline-block;">

	</div>

	<div id ="chartContainer4" style="width: 45%; height: 300px;display: inline-block;">

	</div>

	</div>

</div>
<script src="/~1704807/canvasjs-2.3.2/canvasjs.min.js"></script>
<script src="../Controller/graph-script.js"></script>

</body>
</html>
