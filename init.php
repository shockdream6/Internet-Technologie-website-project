<?php
//Database connection
$db = new mysqli('localhost','root','root','internetProjectWebsite');

//all articles
$query = $db->query('SELECT * FROM articles');

while($row =$query->fetch_object()){
    $articles[]=$row;

}
print_r($articles);
?>
