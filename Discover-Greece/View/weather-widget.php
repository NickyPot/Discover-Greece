<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

$xmltxt = file_get_contents('http://weather-broker-cdn.api.bbci.co.uk/en/forecast/rss/3day/264371');
$xml = simplexml_load_string($xmltxt);


$xsl = simplexml_load_file("/home/UAD/1704807/public_html/View/xslst.xsl") ;
$proc = new XSLTProcessor();
$proc->importStyleSheet($xsl);
$result = $proc->transformtoXML($xml) ;
echo $result;

?>
