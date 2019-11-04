<?php

  echo "hi";
ini_set("display_errors", 1);
error_reporting(E_ALL);
	// Connect to database
	include("/home/UAD/1704807/public_html/Model/connection.php");
	$db = new dbObj();
	$conn =  $db->getConnstring();


//gets the article details along with associated comments

  global $conn;
  $articleId = 1;
//using prepared beacause hackers could change the id that is taken from the items page
  $prepared = $conn -> prepare("SELECT articles.articleTitle, articles.articleAuthor, articles.articleTxtAdd, articles.articleVidAdd, comments.commentBody, users.userName
    FROM articles
    JOIN comments on articles.articleID = comments.articleID
    JOIN users on users.userID = comments.userID WHERE articles.articleID = ?");
  $prepared ->bind_param("i", $articleId);
  $prepared ->execute();
  $result = $prepared ->get_result();

  $articleArray = array();

  while($temp = $result -> fetch_assoc())
  {
    $articleArray[] = $temp;

  }


  echo json_encode($articleArray);
  echo "hi";



?>
