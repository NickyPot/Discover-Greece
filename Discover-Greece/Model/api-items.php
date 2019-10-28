<?php
	// Connect to database
	include("/home/UAD/1704807/public_html/Model/connection.php");
	$db = new dbObj();
	$conn =  $db->getConnstring();

//this will give you all the items along with their details and one of their images. It is used for the homepage cards
  function getAllItems(){

    global $conn;

    $sql = "SELECT items.itemTitle, items.itemDesc, images.imgAdd, articles.articleTitle, articles.articleTxtAdd
    FROM items
    JOIN imgItem on items.itemID = imgItem.itemID
    JOIN images on imgItem.imgID = images.imgID
    LEFT JOIN articleItem on items.itemID = articleItem.itemID
    LEFT JOIN articles on articleItem.articleID = articles.articleID
    group by items.itemID";

    $items = mysqli_query($conn, $sql);

    $itemDetails = array();

    while ($r = mysqli_fetch_assoc($items)) {

      $itemDetails[] = $r;
      // code...
    }

    return json_encode($itemDetails);

  }

  ?>
