// this will get the article address and open the article page when the article link is clicked
$(document).ready(function(){

  $(".card-link").click(function(){

    var articleID = document.getElementById("articleID").value;
    openArticle(articleID);



  });

});



function openArticle(articleID)
{
var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
           if (this.readyState == 4 && this.status == 200) {
               document.getElementById('test').innerHTML = this.responseText;
           }

     }

     xmlhttp.open("GET", "View/article-page.php?articleId="+articleID, true);
     xmlhttp.send();
}
