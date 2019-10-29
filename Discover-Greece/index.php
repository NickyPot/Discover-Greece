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

  <div>

    <!-- source: https://wallpapermemory.com/uploads/705/santorini-wallpaper-1080p-496872.jpg-->
    <img class="img-responsive center-block fit-image" src="/~1704807/imgs/headerImage2.jpg" alt="header image">
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





    </ul>

  </nav>

<div class="row container-fluid">

<div class="container col-sm-2 order-12 order-xl-1">


  <div class="sidenav">
    <?php
      session_start();

      if (!isset($_SESSION["loggedIn"])) {
          echo "
            <a class='nav-link' id='navbar-link' href='/~1704807/View/create-user-form.php'>Register</a>
            <a class='nav-link' id='navbar-link' href='/~1704807/View/login-form.php'>Log In</a>
          ";
      } elseif (isset($_SESSION["loggedIn"])) {
          echo "
            <a class='nav-link' id='navbar-link' href='/~1704807/Controller/logout.php'>Log Out</a>
          ";
      }

    ?>
</div>
</div>

<div class="container col-sm-10 order-1 order-xl-12">


<div class="container">



<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);


  include("/home/UAD/1704807/public_html/View/show-items.php");
?>


  </div>

</div>

</div>



</body>

</html>
