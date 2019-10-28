<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<?php
  session_start();
?>
  <div>

    <!-- source: https://wallpapermemory.com/uploads/705/santorini-wallpaper-1080p-496872.jpg-->
    <img class="img-responsive center-block" src="imgs/headerImage2.jpg" alt="header image">
  </div>

  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">

    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <?php
        if ($_SESSION["loggedIn"] == true)
        {
          echo "  <li class='nav-item'>
              <a class='nav-link' href='View/login-form.php'>LogIn</a>
            </li>";
        }

        else {
          echo "  <li class='nav-item'>
              <a class='nav-link' href='/Controller/logout.php'>Log Out</a>
            </li>";
        }

      ?>


    </ul>

  </nav>

<div class="container">


<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);


  include("/home/UAD/1704807/public_html/View/show-items.php");
?>


  </div>






</body>

</html>
