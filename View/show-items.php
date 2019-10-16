<?php


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
