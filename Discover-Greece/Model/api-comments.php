<?php
	// Connect to database
	include("/home/UAD/1704807/public_html/Model/connection.php");
	$db = new dbObj();
	$conn =  $db->getConnstring();



//gets the article details along with associated comments
function createComment($jsonText)
{
  global $conn;

  $commentDets = json_decode($jsonText);

  $prepared = $conn ->prepare("INSERT INTO comments (commentBody, userID, articleID) VALUES (?, ?, ?)");
  $prepared -> bind_param("sii", $commentBody, $userId, $articleId);

  $commentBody = $commentDets -> commentBody;
  $userId = $commentDets -> userId;
  $articleId = $commentDets -> articleId;

  return $prepared -> execute();




}






?>
