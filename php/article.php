
<?php
/**
 * Created by PhpStorm.
 * User: Anthony
 * Date: 14/06/2018
 * Time: 13:18
 */

require_once 'init.php';
$article = null;
//if id ia available
if (isset($_GET['id'])) {
    //stores id from database to $id
    //security against sql injection, cast to integer
    $id = (int)$_GET['id'];
    $article = $db->query("SELECT * FROM articles WHERE id = {$id}")->fetch_object();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
</head>

<body>
<div>
    <?php if ($article): ?>
    <div class="article">
        This is an article "<?php echo $article->title; ?>".
        <div class="" article-rating
        ">Rating: x/5
    </div>
    <div class="article-rate">
        Rate this article:
        <?php foreach (range(1, 5) as $rating): ?>
            <a href="rate.php?article=<?php echo $article->id; ?>&rating=<?php echo $rating; ?>"><?php echo $rating; ?></a>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>

</div>

</body>
</html>
