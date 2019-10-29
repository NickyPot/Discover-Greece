<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);



  session_start();

  include("/home/UAD/1704807/public_html/Model/api-user.php");

  $data -> userName = $_POST["username"];
  $data -> userPass = $_POST["password"];
  $jsonData = json_encode($data);
  $res = getUser($jsonData);
  echo $res;


  if ($res > 0){

    $_SESSION["loggedIn"] = true;
  }

else {
      $_SESSION["loggedIn"] = false;
}


header ("Location: /~1704807/index.php");


?>
