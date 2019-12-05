<?php

// Connect to database
include("/home/UAD/1704807/public_html/Model/connection.php");
$db = new dbObj();
$conn =  $db->getConnstring();


ini_set("display_errors", 1);
error_reporting(E_ALL);

  session_start();

  include("/home/UAD/1704807/public_html/Model/api-comments.php");



  $commentDets -> commentBody = $_POST['commentBody'];
  $commentDets -> userId = $_SESSION['loggedIn'];
  $commentDets -> articleId =  $_POST['articleId'];

  $jsonCommnent = json_encode($commentDets);

  echo $jsonCommnent;
  if(createComment($jsonCommnent))
  {
    echo "success";

  }

  else {
    echo "failed";
  }



?>
