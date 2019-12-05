<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/~1704807/View/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

  <!-- source: https://wallpapermemory.com/uploads/705/santorini-wallpaper-1080p-496872.jpg-->
  <img class="img-responsive center-block fit-image" src="/~1704807/imgs/headerImage2.jpg" alt="header image">
</div>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">

  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>





  </ul>

</nav>

<?php


ini_set("display_errors", 1);
error_reporting(E_ALL);
// Connect to database
include("/home/UAD/1704807/public_html/Model/connection.php");
$db = new dbObj();
$conn =  $db->getConnstring();



  include("/home/UAD/1704807/public_html/Model/api-article.php");

  $articleId = $_GET['articleId'];
  $articleJson = getArticleById($articleId);
  $article = json_decode($articleJson);



  echo $article[0] -> articleTitle;
  echo "<br>";
  echo $article[0] -> articleAuthor;
  echo "<br>";
  include $article[0] -> articleTxtAdd;
  echo "<br>";
  echo $article[0] -> articleVidAdd;

?>

<?php
for ($i=0; $i <sizeof($article) ; $i++) {
  ?>

  <div class="card">
    <div class="card-body">
      <?php echo $article[$i] -> userName;
            echo $article[$i] -> commentBody;
      ?>
    </div>

  </div>




  <?php
}

?>



<form  action="/~1704807/Controller/comments.php" method="post">
  <input type="text" name="commentBody" >
  <input type="hidden" name="articleId" value="<?php echo $articleId ?>">
  <br>
  <input type="submit">

</form>





</div>



</body>

</html>
