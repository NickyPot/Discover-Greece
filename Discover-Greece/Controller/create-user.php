<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();

include("/home/UAD/1704807/public_html/Model/api-user.php");

$data -> userName = $_POST["username"];
$data -> userPass = $_POST["password"];
$jsonData = json_encode($data);
$res = createUser($jsonData);
//echo $res;


if ($res==true){

  $_SESSION["loggedIn"] = true;
  header ("Location: /~1704807/index.php");
}

else {
    $_SESSION["loggedIn"] = false;
    include("/home/UAD/1704807/public_html/View/create-user-form.php");
    echo "cant create user exists";
}



?>
