<?php
/**
 * Created by PhpStorm.
 * User: shockdream6
 * Date: 16.06.2018
 * Time: 09:41
 */
require_once 'init.php';
//if in address bar the article and rating is in there
if (isset($_GET['article'], $_GET['rating'])) {

    $article = (int)$_GET['article'];
    $rating = (int)$_GET['rating'];
//rating is between 1-5
    if (in_array($rating, [1, 2, 3, 4, 5,])) {
        //returns boolean if articles exist
        $exists = $db->query("SELECT id FROM articles WHERE id = {$article}")->num_rows ? true : false;
        //print_r($exists)
        if ($exists) {
            $db->query("INSERT INTO articles_ratings (article, rating) VALUES ({$article}, {$rating}) ");
            echo "INSERT sucessfull";
        }
    }
    // header('Location: article.php?id=' . $article);


}
