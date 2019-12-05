<?php

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

function getCommentsByArticleId($articleId)
{
	global $conn;

//using prepared beacause hackers could change the id that is taken from the items page
  $prepared = $conn -> prepare("SELECT  comments.commentBody, users.userName
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

  return json_encode($articleArray);


}






?>
