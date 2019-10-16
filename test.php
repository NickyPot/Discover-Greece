<?php
//connect to db
$serverName = "lochnagar.abertay.ac.uk";
$userName = "sql1704807";
$password = "7DnkHOYCiHMh";
$dbName = "sql1704807";
$conn = new mysqli($serverName, $userName, $password, $dbName);
//get all the appointments
$appointmentSql = "SELECT items.itemTitle, items.itemDesc, images.imgAdd FROM items JOIN imgItem on items.itemID = imgItem.itemID JOIN images on imgItem.imgID = images.imgID
";
$appointments = $conn->query($appointmentSql);
while ($row = $appointments->fetch_assoc()){
//put all the data of the appointments into the table
echo "   <tr>
    <td>" . $row["itemTitle"] . "</td>
    <td>" . $row["itemDesc"] . "</td>
    <td>" . $row["imgAdd"] . "</td>
  </tr> ";
  $conn->close();
}
?>



SELECT items.itemTitle, items.itemDesc, images.imgAdd FROM items JOIN imgItem on items.itemID = imgItem.itemID JOIN images on imgItem.imgID = images.imgID


<?php
//connect to db
$serverName = "lochnagar.abertay.ac.uk";
$userName = "sql1704807";
$password = "7DnkHOYCiHMh";
$dbName = "sql1704807";
$conn = new mysqli($serverName, $userName, $password, $dbName);
//get all the appointments
$appointmentSql = "SELECT items.itemTitle, items.itemDesc, images.imgAdd FROM items JOIN imgItem on items.itemID = imgItem.itemID JOIN images on imgItem.imgID = images.imgID
";
$appointments = $conn->query($appointmentSql);

$rowVar = 0;
while ($row = $appointments->fetch_assoc()){

  if ($rowVar ==  0 || $rowVar ==  3 || $rowVar ==  6 ||)
  {echo "<div class="row">";}
//put all the data of the appointments into the table
echo "  <div class="card">
  <img class="card-img-top" src=" . $row["imgAdd"] . " alt="Card image">
  <div class="card-body">
    <h4 class="card-title"> . $row["itemTitle"] . </h4>
    <p class="card-text"> . $row["itemDesc"] . </p>

  </div>
</div> ";

  if ($rowVar ==  0 || $rowVar ==  3 || $rowVar ==  6 ||)
  {echo "</div>";}
  $conn->close();
}
?>
