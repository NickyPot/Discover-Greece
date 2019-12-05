<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/~1704807/View/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);
// Connect to database
include("/home/UAD/1704807/public_html/Model/connection.php");
$db = new dbObj();
$conn =  $db->getConnstring();



  session_start();

  include("/home/UAD/1704807/public_html/Model/api-user.php");

//if the email, password or reCaptcha have NOT been filled out then do this
if (empty($_POST["username"]) or empty($_POST["password"]) or empty($_POST["g-recaptcha-response"]))
{
  include ("/home/UAD/1704807/public_html/View/login-form.php");
  echo "<p id='formAlert'>Please make sure you have filled out your email, password and have completed the captcha!</p>";


}

//if  everything was filled out
else
{

    $data -> userName = $_POST["username"];
    $data -> userPass = $_POST["password"];
    $recaptchaKey = "6LcOKMAUAAAAACTmKSg0GpUvPTNhOEIItVlJU4o7";
    $userIp = $_SERVER['REMOTE_ADDR'];
    $recaptchaResp = $_POST['g-recaptcha-response'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaKey&response=$recaptchaResp&remoteip=$userIp";
    $isBot = file_get_contents($url);
    $isBot = json_decode($isBot);

  //if the reCaptcha was successfull
    if ($isBot ->success) {
      echo "success";

      $jsonData = json_encode($data);

      $userId =getUser($jsonData);
    //if there is at least one user
      if ($userId != false){

        $_SESSION["loggedIn"] = $userId;
        header ("Location: /~1704807/index.php");
      }

    //if there is no users
    else {


        echo "not a user";
    }





    }

    //if you are a bot
    else {
      echo "false";
    }


}
?>

</body>

</html>
