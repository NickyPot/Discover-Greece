<?php


//this file will trigget the get switch in the items.php file and get the item with if 1
	$url = "https://mayar.abertay.ac.uk/~1704807/Controller/items.php?id=1" ;

	$curl = curl_init($url) ;
  	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  	$resp = curl_exec($curl) ;
  	echo "Finished :" ;
  	echo $resp ;
  	if (!$resp) {die('Error : "'.curl_error($curl).'" - Code: '.curl_errno($curl)); }
  	curl_close($curl) ;
?>
