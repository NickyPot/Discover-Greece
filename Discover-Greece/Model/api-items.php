<?php

//this will give you all the items along with their details and one of their images. It is used for the homepage cards
  function getAllItems(){

    global $conn;

    $sql = "SELECT items.itemTitle, items.itemDesc, images.imgAdd, articles.articleTitle, articles.articleTxtAdd, articles.articleID
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

    }

    return json_encode($itemDetails);

  }


	function getItemById($itemId)
	{
		global $conn;


	  $prepared = $conn -> prepare("SELECT * FROM items where itemID = ?");
	  $prepared ->bind_param("i", $itemId);
	  $prepared ->execute();
	  $result = $prepared ->get_result();

	  $itemArray = array();

	  while($temp = $result -> fetch_assoc())
	  {
	    $itemArray[] = $temp;

	  }

	  return json_encode($itemArray);
	}


	function createItem()
	{
		global $conn;
		$data = json_decode(file_get_contents('php://input'), true);//get the data from POST
		$itemTitle = $data["itemTitle"];
		$itemDesc = $data["itemDesc"];

		$prepared = $conn -> prepare("INSERT INTO items (itemTitle, itemDesc) VALUES (?, ?)");
		$prepared ->bind_param("ss", $itemTitle, $itemDesc);

		if($prepared ->execute())
		{
			echo "item was succesfully created!";

		}
		else
		{
			"Item creation failed!";


		}


	}

  ?>
