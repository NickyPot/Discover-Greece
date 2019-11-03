<?php
	// Connect to database
	include("/home/UAD/1704807/public_html/Model/connection.php");
	$db = new dbObj();
	$conn =  $db->getConnstring();


function getArticleById($articleId)
{
  global $conn;

//using prepared beacause hackers could change the id that is taken from the items page
  $prepared = $conn -> prepare("SELECT * FROM `articles` WHERE articleID = ?");
  $prepared ->bind_param("i", $articleId);
  $prepared ->execute();
  $result = $prepared ->get_result();
  $result = $result -> fetch_assoc();

  return $jsonResult = json_encode($result);




}


?>
