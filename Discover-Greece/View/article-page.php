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



<?php


ini_set("display_errors", 1);
error_reporting(E_ALL);


  include("/home/UAD/1704807/public_html/Model/api-article.php");
  include("/home/UAD/1704807/public_html/Model/api-comments.php");

  $articleId = $_GET['articleId'];
  $articleJson = getArticleById($articleId);
  $articleJsonComments = getCommentsByArticleId($articleId);
  $article = json_decode($articleJson);
  $comments = json_decode($articleJsonComments);



  echo $article[0] -> articleTitle;
  echo "<br>";
  echo $article[0] -> articleAuthor;
  echo "<br>";
  include $article[0] -> articleTxtAdd;
  echo "<br>";
  echo $article[0] -> articleVidAdd;

?>

<?php
for ($i=0; $i <sizeof($comments) ; $i++) {
  ?>

  <div class="card">
    <div class="card-body">
      <?php echo $comments[$i] -> userName;
            echo $comments[$i] -> commentBody;
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
