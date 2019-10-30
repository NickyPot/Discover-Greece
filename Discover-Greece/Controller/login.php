<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

  session_start();

  include("/home/UAD/1704807/public_html/Model/api-user.php");

  $data -> userName = $_POST["username"];
  $data -> userPass = $_POST["password"];
  $recaptchaKey = "6LcOKMAUAAAAACTmKSg0GpUvPTNhOEIItVlJU4o7";
  $userIp = $_SERVER['REMOTE_ADDR'];
  $recaptchaResp = $_POST['g-recaptcha-response'];
  $url = "https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaKey&response=$recaptchaResp&remoteip=$userIp";
  $isBot = file_get_contents($url);
  $isBot = json_decode($isBot);

  if ($isBot ->success) {
    echo "success";

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


  }

  else {
    echo "false";
  }


?>
