<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);
	//  complete the CURL
	$url = "https://mayar.abertay.ac.uk/~1704807/Controller/items.php?" ;

	$curl = curl_init($url) ;
  	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  	$resp = curl_exec($curl) ;
  	echo "Finished :" ;
  	echo $resp ;
  	if (!$resp) {die('Error : "'.curl_error($curl).'" - Code: '.curl_errno($curl)); }
  	curl_close($curl) ;
?>
