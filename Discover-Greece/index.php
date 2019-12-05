<!DOCTYPE html>
<html lang="en">

<head>
  <title>Discover Greece</title>
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
        <a class="nav-link" href="/~1704807/index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/~1704807/View/weeks/week1.html">Week 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/~1704807/View/weeks/week2.html">Week 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/~1704807/View/weeks/week3.html">Week 3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/~1704807/View/weeks/week4.html">Week 4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/~1704807/View/weeks/week5.html">Week 5</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/~1704807/View/weeks/week6.html">Week 6</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/~1704807/View/weeks/week7.html">Week 7</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/~1704807/View/weeks/week8.html">Week 8</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/~1704807/View/weeks/week9.html">Week 9</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/~1704807/View/weeks/week10.html">Week 10</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/~1704807/View/weeks/week11.html">Week 11</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/~1704807/View/weeks/week12.html">Week 12</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/~1704807/View/sensor-page.html">Sensor Page</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/~1704807/rss.php">RSS Feed</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/~1704807/View/rest-procedures.php">Rest Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/~1704807/View/references.html">References</a>
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

<div id="test" class="container col-sm-10 order-1 order-xl-12">


<div class="container">



<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);


  include("/home/UAD/1704807/public_html/View/show-items.php");
?>


  </div>

</div>

</div>


<script src="Controller/articleScripts.js"></script>
</body>

<footer>


    <div class='card' id="weather-widget">
  <?php
  include ("/home/UAD/1704807/public_html/View/weather-widget.php");
  if(isset($_SESSION["comment"]))
  {
    echo $_SESSION["comment"];
    unset($_SESSION["comment"]);

  }


  ?>
</div>


  </div>

</footer>

</html>
