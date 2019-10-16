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
//connect to db
$serverName = "lochnagar.abertay.ac.uk";
$userName = "sql1704807";
$password = "7DnkHOYCiHMh";
$dbName = "sql1704807";
$conn = new mysqli($serverName, $userName, $password, $dbName);
//get all the appointments
$appointmentSql = "SELECT items.itemTitle, items.itemDesc, images.imgAdd, articles.articleTitle, articles.articleTxtAdd
FROM items
JOIN imgItem on items.itemID = imgItem.itemID
JOIN images on imgItem.imgID = images.imgID
LEFT JOIN articleItem on items.itemID = articleItem.itemID
LEFT JOIN articles on articleItem.articleID = articles.articleID
group by items.itemID";
$appointments = $conn->query($appointmentSql);

$rowVar = 0;
while ($row = $appointments->fetch_assoc()){

  if ($rowVar ==  0 || $rowVar ==  3 || $rowVar ==  6 || $rowVar ==  9  )
  {echo "<div class='row'>";}
//put all the data of the appointments into the table
echo "  <div class='card' style='width: 18rem;'>
  <img class='card-img-top' src='" . $row["imgAdd"] . "' alt='Card image'  width = '200' height = '200'>
  <div class='card-body'>
    <h4 class='card-title'> " . $row["itemTitle"] . " </h4>
    <p class='card-text'> " . $row["itemDesc"] . " </p>
    <a href='". $row["articleTxtAdd"] . "' class='card-link'> ". $row["articleTitle"] . "</a>
    <a href='#' class='card-link'>Card link</a>

  </div>
</div> ";

  if ($rowVar ==  2 || $rowVar ==  5 || $rowVar ==  8 || $rowVar ==  11  )
  {echo "</div>";}
  $conn->close();
  $rowVar++;
}
?>



  </div>






</body>

</html>
