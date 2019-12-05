<?php
// Connect to database
include("/home/UAD/1704807/public_html/Model/connection.php");
$db = new dbObj();
$conn =  $db->getConnstring();



    header("Content-Type: application/rss+xml; charset=ISO-8859-1");
    include("/home/UAD/1704807/public_html/Model/api-article.php");

    $rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    $rssfeed .= '<title>Discover Greece RSS Feed</title>';
    $rssfeed .= '<link>https://mayar.abertay.ac.uk/~1704807</link>';
    $rssfeed .= '<description>This RSS feed will give you the five latest articles from our page!</description>';
    $rssfeed .= '<language>en-us</language>';
    $rssfeed .= '<copyright>Copyright (C) 2019 mayar.abertay.ac.uk/~1704807</copyright>';


      $json = getFiveLastArticles();
      $jsonDec = json_decode($json);
      for($i=0;$i<5;$i++)
      {


              $rssfeed .= '<item>';
              $rssfeed .= '<title>' . $jsonDec[$i] -> articleTitle . '</title>';
              $rssfeed .= '<description>' .$jsonDec[$i] -> articleDescription  . '</description>';
              $rssfeed .= '<link>' . $jsonDec[$i] -> articleLink . '</link>';

              $rssfeed .= '</item>';


      }




    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';

    echo $rssfeed;
?>
