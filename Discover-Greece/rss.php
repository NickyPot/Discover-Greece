<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

    header("Content-Type: application/rss+xml; charset=ISO-8859-1");
    include("/home/UAD/1704807/public_html/Model/api-article.php");

    $rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    $rssfeed .= '<title>My RSS feed</title>';
    $rssfeed .= '<link>http://www.mywebsite.com</link>';
    $rssfeed .= '<description>This is an example RSS feed</description>';
    $rssfeed .= '<language>en-us</language>';
    $rssfeed .= '<copyright>Copyright (C) 2009 mywebsite.com</copyright>';


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
