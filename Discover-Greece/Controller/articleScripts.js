


// this ajax function is used to display the articles without changing pages
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
