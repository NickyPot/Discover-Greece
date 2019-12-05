<?php

//gets the article details along with associated comments
function getArticleById($articleId)
{
  global $conn;

//using prepared beacause hackers could change the id that is taken from the items page
  $prepared = $conn -> prepare("SELECT * FROM articles where articleID = ?");
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



function getFiveLastArticles()
{
	global $conn;

	$sql = "SELECT * FROM `articles` ORDER BY `dateAdded` ASC LIMIT 5";

	$articles = mysqli_query($conn, $sql);



	while ($r = mysqli_fetch_assoc($articles)) {

		$article[] = $r;

	}

	return json_encode(	$article);


}

?>
