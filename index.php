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
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>

  </nav>



  <div class="container">



<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);
include("Model/api.php") ;


$itemTxt = getAllItems();

$itemJson = json_decode($itemTxt);
$rowVar =  0;

for ($it = 0; $it < sizeof($itemJson); $it++)
{

  if ($rowVar ==  0 || $rowVar ==  3 || $rowVar ==  6 || $rowVar ==  9  )
  {echo "<div class='row'>";}
//put all the data of the appointments into the table
echo "  <div class='card' style='width: 18rem;'>
  <img class='card-img-top' src='" . $itemJson[$it] -> imgAdd . "' alt='Card image'  width = '200' height = '200'>
  <div class='card-body'>
    <h4 class='card-title'> " . $itemJson[$it] -> itemTitle . " </h4>
    <p class='card-text'> " . $itemJson[$it] -> itemDesc . " </p>
    <a href='". $itemJson[$it] -> articleTxtAdd . "' class='card-link'> ". $itemJson[$it] -> articleTitle . "</a>
    <a href='#' class='card-link'>Card link</a>

  </div>
</div> ";

  if ($rowVar ==  2 || $rowVar ==  5 || $rowVar ==  8 || $rowVar ==  11  )
  {echo "</div>";}
//  $conn->close();
  $rowVar++;


}


?>



  </div>






</body>

</html>
