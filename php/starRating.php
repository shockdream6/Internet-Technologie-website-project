<?php
/**
 * Created by PhpStorm.
 * User: shockdream6
 * Date: 17.06.2018
 * Time: 14:59
 */

function drawStars($article){
    for ($i = 1; $i <= 5; $i++) {
        echo "<span id=\"star$i\"><a href=\"hello.php?article=1&rating=$i\"><i class=\"far fa-star\"></i></a></span>";
    }
}