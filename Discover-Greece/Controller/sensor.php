<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

// Connect to database
include("/home/UAD/1704807/public_html/Model/connection.php");
$db = new dbObj();
$conn =  $db->getConnstring();



include("/home/UAD/1704807/public_html/Model/api-sensor.php");
// decode the json body from the request

$jsonbody = file_get_contents('php://input') ;

$jsonobj = json_decode($jsonbody) ;

$external = $jsonobj -> external ;

$internal = $jsonobj -> internal ;
$lightLevel = $jsonobj ->lightLevel;
$deviceId = $jsonobj -> device;
$voltage = $jsonobj -> voltage;

$jsonArray = array('internal' => $internal, 'external' => $external, 'lightLevel' => $lightLevel, 'voltage' => $voltage);
$jsonbody = json_encode($jsonArray);

echo $deviceId . "  ";
echo $jsonbody;

saveSensorState($deviceId, $jsonbody);


?>
