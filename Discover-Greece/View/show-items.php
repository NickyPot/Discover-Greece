<?php

// Connect to database
include("/home/UAD/1704807/public_html/Model/connection.php");
$db = new dbObj();
$conn =  $db->getConnstring();


include("/home/UAD/1704807/public_html/Model/api-items.php") ;


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
    <a class='card-link' onclick='openArticle(".$itemJson[$it] -> articleID .")'> ". $itemJson[$it] -> articleTitle . "</a>
    <input type='hidden' id='articleID' value='".  $itemJson[$it] -> articleID . "'>

  </div>
</div> ";

  if ($rowVar ==  2 || $rowVar ==  5 || $rowVar ==  8 || $rowVar ==  11  )
  {echo "</div>";}
//  $conn->close();
  $rowVar++;


}


?>
