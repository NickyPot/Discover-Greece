<?php
  session_start();

  include("../Model/api-user.php");

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


?>
