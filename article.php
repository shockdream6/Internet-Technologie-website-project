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
if(isset($_GET['id'])){
    //stores id from database to $id
    //security against sql injection, cast to integer
    echo $id = (int)$_GET['id'];
}

?>