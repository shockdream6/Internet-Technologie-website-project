<?php
require_once 'init.php';
//all articles
$query=$db->query("
SELECT articles.id, articles.title, AVG(articles_ratings.rating) AS rating 
FROM articles 
LEFT JOIN articles_ratings 
ON articles.id = articles_rating.article 
GROUP BY articles.id");

$articles= [];
//saves all info from query to array
while($row = $query->fetch_object()){
 $articles[]=$row;
 print_r($articles);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
</head>
<body>
<?php foreach($articles as $article ): ?>
<div class="article">
    <h3><a href="article.php?id=<?php echo $article->id; ?>"><?php echo $article->title; ?></a></h3>
    <div class="article-rating">Rating: <?php echo $article->rating ?>/5</div>
</div>
<?php endforeach; ?>

</body>
</html>