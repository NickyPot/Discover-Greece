<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);
// Connect to database
include("/home/UAD/1704807/public_html/Model/connection.php");
$db = new dbObj();
$conn =  $db->getConnstring();



include("/home/UAD/1704807/public_html/Model/api-items.php");

$requestMethod = $_SERVER["REQUEST_METHOD"];

switch($requestMethod)
	{
		case 'GET':
			//get item by id
			if(!empty($_GET["id"]))
			{
				$id=intval($_GET["id"]);
				 echo getItemById($id);
			}
			else
			{
        //if no id is given, then get all items
				echo getAllItems();
			}
			break;
		case 'POST':
			// insert new item
			createItem();
			break;


		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}

  ?>
